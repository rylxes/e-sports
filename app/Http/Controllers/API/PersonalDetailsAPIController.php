<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePersonalDetailsAPIRequest;
use App\Http\Requests\API\UpdatePersonalDetailsAPIRequest;
use App\Models\PersonalDetails;
use App\Repositories\PersonalDetailsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PersonalDetailsController
 * @group Personal Details
 * @package App\Http\Controllers\API
 */

class PersonalDetailsAPIController extends AppBaseController
{
    /** @var  PersonalDetailsRepository */
    private $personalDetailsRepository;

    public function __construct(PersonalDetailsRepository $personalDetailsRepo)
    {
        $this->personalDetailsRepository = $personalDetailsRepo;
    }

    /**
     * Display a listing of the PersonalDetails.
     * GET|HEAD /personalDetails
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $personalDetails = $this->personalDetailsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($personalDetails->toArray(), 'Personal Details retrieved successfully');
    }

    /**
     * Store a newly created PersonalDetails in storage.
     * POST /personalDetails
     *
     * @param CreatePersonalDetailsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePersonalDetailsAPIRequest $request)
    {
        $input = $request->all();

        $personalDetails = $this->personalDetailsRepository->create($input);

        return $this->sendResponse($personalDetails->toArray(), 'Personal Details saved successfully');
    }

    /**
     * Display the specified PersonalDetails.
     * GET|HEAD /personalDetails/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PersonalDetails $personalDetails */
        $personalDetails = $this->personalDetailsRepository->find($id);

        if (empty($personalDetails)) {
            return $this->sendError('Personal Details not found');
        }

        return $this->sendResponse($personalDetails->toArray(), 'Personal Details retrieved successfully');
    }

    /**
     * Update the specified PersonalDetails in storage.
     * PUT/PATCH /personalDetails/{id}
     *
     * @param int $id
     * @param UpdatePersonalDetailsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersonalDetailsAPIRequest $request)
    {
        $input = $request->all();

        /** @var PersonalDetails $personalDetails */
        $personalDetails = $this->personalDetailsRepository->find($id);

        if (empty($personalDetails)) {
            return $this->sendError('Personal Details not found');
        }

        $personalDetails = $this->personalDetailsRepository->update($input, $id);

        return $this->sendResponse($personalDetails->toArray(), 'PersonalDetails updated successfully');
    }

    /**
     * Remove the specified PersonalDetails from storage.
     * DELETE /personalDetails/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PersonalDetails $personalDetails */
        $personalDetails = $this->personalDetailsRepository->find($id);

        if (empty($personalDetails)) {
            return $this->sendError('Personal Details not found');
        }

        $personalDetails->delete();

        return $this->sendSuccess('Personal Details deleted successfully');
    }
}
