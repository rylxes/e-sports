<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFitnessCoachAPIRequest;
use App\Http\Requests\API\UpdateFitnessCoachAPIRequest;
use App\Http\Requests\API\UploadPicturesAPIRequest;
use App\Http\Requests\API\UploadProfileAPIRequest;
use App\Models\FitnessCoach;
use App\Repositories\FitnessCoachRepository;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;

/**
 * Class FitnessCoachController
 * @group Fitness Coach
 * @package App\Http\Controllers\API
 */
class FitnessCoachAPIController extends AppBaseController
{
    use FilesTrait;

    /** @var  FitnessCoachRepository */
    private $fitnessCoachRepository;

    public function __construct(FitnessCoachRepository $fitnessCoachRepo)
    {
        $this->fitnessCoachRepository = $fitnessCoachRepo;
    }

    /**
     * Display a listing of the FitnessCoach.
     * GET|HEAD /fitnessCoaches
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $fitnessCoaches = $this->fitnessCoachRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($fitnessCoaches->toArray(), 'Fitness Coaches retrieved successfully');
    }

    /**
     * Store a newly created FitnessCoach in storage.
     * POST /fitnessCoaches
     *
     * @param CreateFitnessCoachAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFitnessCoachAPIRequest $request)
    {
        DB::beginTransaction();
        $input = $request->all();
        $input['name'] = $input['last_name'] . " " . $input['first_name'];
        $user = $this->createUser($input, 'fitness_coach');
        $input['user_id'] = $user->id;
        $fitnessCoach = $this->fitnessCoachRepository->create($input);
        $__response = $this->uploadOneFile($request, $fitnessCoach, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        $__response = $this->uploadOneFile($request, $fitnessCoach, 'License', 'license');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }

        DB::commit();
        if ($this->hasFile) {
            $fitnessCoach = $this->fitnessCoachRepository->find($fitnessCoach->id);
            $mediaItems = $fitnessCoach->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $fitnessCoach = $this->fitnessCoachRepository->update($input, $fitnessCoach->id);
        }
        return $this->sendResponse($fitnessCoach->toArray(), 'Fitness Coach saved successfully');
    }


    public function uploadProfile(UploadProfileAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = FitnessCoach::where('user_id', $user)->first();
        $__response = $this->uploadOneFile($request, $response, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }


    public function uploadPictures(UploadPicturesAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = FitnessCoach::where('user_id', $user)->first();
        $__response = $this->uploadMultipleFile($request, $response, 'License', 'pictures');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }

    /**
     * Display the specified FitnessCoach.
     * GET|HEAD /fitnessCoaches/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var FitnessCoach $fitnessCoach */
        $fitnessCoach = $this->fitnessCoachRepository->find($id);

        if (empty($fitnessCoach)) {
            return $this->sendError('Fitness Coach not found');
        }

        return $this->sendResponse($fitnessCoach->toArray(), 'Fitness Coach retrieved successfully');
    }

    /**
     * Update the specified FitnessCoach in storage.
     * PUT/PATCH /fitnessCoaches/{id}
     *
     * @param int $id
     * @param UpdateFitnessCoachAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFitnessCoachAPIRequest $request)
    {
        $input = $request->all();

        /** @var FitnessCoach $fitnessCoach */
        $fitnessCoach = $this->fitnessCoachRepository->find($id);

        if (empty($fitnessCoach)) {
            return $this->sendError('Fitness Coach not found');
        }

        $fitnessCoach = $this->fitnessCoachRepository->update($input, $id);

        return $this->sendResponse($fitnessCoach->toArray(), 'FitnessCoach updated successfully');
    }

    /**
     * Remove the specified FitnessCoach from storage.
     * DELETE /fitnessCoaches/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var FitnessCoach $fitnessCoach */
        $fitnessCoach = $this->fitnessCoachRepository->find($id);

        if (empty($fitnessCoach)) {
            return $this->sendError('Fitness Coach not found');
        }

        $fitnessCoach->delete();

        return $this->sendSuccess('Fitness Coach deleted successfully');
    }
}
