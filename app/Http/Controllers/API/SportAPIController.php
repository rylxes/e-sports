<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSportAPIRequest;
use App\Http\Requests\API\UpdateSportAPIRequest;
use App\Models\Sport;
use App\Repositories\SportRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class SportController
 * @package App\Http\Controllers\API
 */

class SportAPIController extends AppBaseController
{
    /** @var  SportRepository */
    private $sportRepository;

    public function __construct(SportRepository $sportRepo)
    {
        $this->sportRepository = $sportRepo;
    }

    /**
     * Display a listing of the Sport.
     * GET|HEAD /sports
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $sports = $this->sportRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($sports->toArray(), 'Sports retrieved successfully');
    }

    /**
     * Store a newly created Sport in storage.
     * POST /sports
     *
     * @param CreateSportAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSportAPIRequest $request)
    {
        $input = $request->all();

        $sport = $this->sportRepository->create($input);

        return $this->sendResponse($sport->toArray(), 'Sport saved successfully');
    }

    /**
     * Display the specified Sport.
     * GET|HEAD /sports/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Sport $sport */
        $sport = $this->sportRepository->find($id);

        if (empty($sport)) {
            return $this->sendError('Sport not found');
        }

        return $this->sendResponse($sport->toArray(), 'Sport retrieved successfully');
    }

    /**
     * Update the specified Sport in storage.
     * PUT/PATCH /sports/{id}
     *
     * @param int $id
     * @param UpdateSportAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSportAPIRequest $request)
    {
        $input = $request->all();

        /** @var Sport $sport */
        $sport = $this->sportRepository->find($id);

        if (empty($sport)) {
            return $this->sendError('Sport not found');
        }

        $sport = $this->sportRepository->update($input, $id);

        return $this->sendResponse($sport->toArray(), 'Sport updated successfully');
    }

    /**
     * Remove the specified Sport from storage.
     * DELETE /sports/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Sport $sport */
        $sport = $this->sportRepository->find($id);

        if (empty($sport)) {
            return $this->sendError('Sport not found');
        }

        $sport->delete();

        return $this->sendSuccess('Sport deleted successfully');
    }
}
