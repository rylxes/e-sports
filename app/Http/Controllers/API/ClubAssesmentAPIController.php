<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateClubAssesmentAPIRequest;
use App\Http\Requests\API\UpdateClubAssesmentAPIRequest;
use App\Models\ClubAssesment;
use App\Repositories\ClubAssesmentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ClubAssesmentController
 * @package App\Http\Controllers\API
 */

class ClubAssesmentAPIController extends AppBaseController
{
    /** @var  ClubAssesmentRepository */
    private $clubAssesmentRepository;

    public function __construct(ClubAssesmentRepository $clubAssesmentRepo)
    {
        $this->clubAssesmentRepository = $clubAssesmentRepo;
    }

    /**
     * Display a listing of the ClubAssesment.
     * GET|HEAD /clubAssesments
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $clubAssesments = $this->clubAssesmentRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($clubAssesments->toArray(), 'Club Assesments retrieved successfully');
    }

    /**
     * Store a newly created ClubAssesment in storage.
     * POST /clubAssesments
     *
     * @param CreateClubAssesmentAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateClubAssesmentAPIRequest $request)
    {
        $input = $request->all();

        $clubAssesment = $this->clubAssesmentRepository->create($input);

        return $this->sendResponse($clubAssesment->toArray(), 'Club Assesment saved successfully');
    }

    /**
     * Display the specified ClubAssesment.
     * GET|HEAD /clubAssesments/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ClubAssesment $clubAssesment */
        $clubAssesment = $this->clubAssesmentRepository->find($id);

        if (empty($clubAssesment)) {
            return $this->sendError('Club Assesment not found');
        }

        return $this->sendResponse($clubAssesment->toArray(), 'Club Assesment retrieved successfully');
    }

    /**
     * Update the specified ClubAssesment in storage.
     * PUT/PATCH /clubAssesments/{id}
     *
     * @param int $id
     * @param UpdateClubAssesmentAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClubAssesmentAPIRequest $request)
    {
        $input = $request->all();

        /** @var ClubAssesment $clubAssesment */
        $clubAssesment = $this->clubAssesmentRepository->find($id);

        if (empty($clubAssesment)) {
            return $this->sendError('Club Assesment not found');
        }

        $clubAssesment = $this->clubAssesmentRepository->update($input, $id);

        return $this->sendResponse($clubAssesment->toArray(), 'ClubAssesment updated successfully');
    }

    /**
     * Remove the specified ClubAssesment from storage.
     * DELETE /clubAssesments/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ClubAssesment $clubAssesment */
        $clubAssesment = $this->clubAssesmentRepository->find($id);

        if (empty($clubAssesment)) {
            return $this->sendError('Club Assesment not found');
        }

        $clubAssesment->delete();

        return $this->sendSuccess('Club Assesment deleted successfully');
    }
}
