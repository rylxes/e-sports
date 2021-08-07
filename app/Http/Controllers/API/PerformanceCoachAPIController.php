<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePerformanceCoachAPIRequest;
use App\Http\Requests\API\UpdatePerformanceCoachAPIRequest;
use App\Http\Requests\API\UploadPicturesAPIRequest;
use App\Http\Requests\API\UploadProfileAPIRequest;
use App\Models\PerformanceCoach;
use App\Repositories\PerformanceCoachRepository;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;

/**
 * Class PerformanceCoachController
 * @group Performance Coach
 * @package App\Http\Controllers\API
 */
class PerformanceCoachAPIController extends AppBaseController
{
    use FilesTrait;

    /** @var  PerformanceCoachRepository */
    private $performanceCoachRepository;

    public function __construct(PerformanceCoachRepository $performanceCoachRepo)
    {
        $this->performanceCoachRepository = $performanceCoachRepo;
    }

    /**
     * Display a listing of the PerformanceCoach.
     * GET|HEAD /performanceCoaches
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $performanceCoaches = $this->performanceCoachRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($performanceCoaches->toArray(), 'Performance Coaches retrieved successfully');
    }

    /**
     * Store a newly created PerformanceCoach in storage.
     * POST /performanceCoaches
     *
     * @param CreatePerformanceCoachAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePerformanceCoachAPIRequest $request)
    {
        DB::beginTransaction();
        $input = $request->all();
        $input['name'] = $input['last_name'] . " " . $input['first_name'];
        $user = $this->createUser($input, 'performance_coach');
        $input['user_id'] = $user->id;
        $performanceCoach = $this->performanceCoachRepository->create($input);

        $__response = $this->uploadOneFile($request, $performanceCoach, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        $__response = $this->uploadOneFile($request, $performanceCoach, 'License', 'license');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }

        DB::commit();
        if ($this->hasFile) {
            $performanceCoach = $this->performanceCoachRepository->find($performanceCoach->id);
            $mediaItems = $performanceCoach->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $performanceCoach = $this->performanceCoachRepository->update($input, $performanceCoach->id);
        }

        return $this->sendResponse($performanceCoach->toArray(), 'Performance Coach saved successfully');
    }


     public function uploadProfile(UploadProfileAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = PerformanceCoach::where('user_id', $user)->first();
        $__response = $this->uploadOneFile($request, $response, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
         if ($this->hasFile) {
            $performanceCoach = $this->performanceCoachRepository->find($response->id);
            $mediaItems = $performanceCoach->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $response = $this->performanceCoachRepository->update($input, $performanceCoach->id);
        }

        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }


    public function uploadPictures(UploadPicturesAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = PerformanceCoach::where('user_id', $user)->first();
        $__response = $this->uploadMultipleFile($request, $response, 'License', 'pictures');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }

    /**
     * Display the specified PerformanceCoach.
     * GET|HEAD /performanceCoaches/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PerformanceCoach $performanceCoach */
        $performanceCoach = $this->performanceCoachRepository->find($id);

        if (empty($performanceCoach)) {
            return $this->sendError('Performance Coach not found');
        }

        return $this->sendResponse($performanceCoach->toArray(), 'Performance Coach retrieved successfully');
    }

    /**
     * Update the specified PerformanceCoach in storage.
     * PUT/PATCH /performanceCoaches/{id}
     *
     * @param int $id
     * @param UpdatePerformanceCoachAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerformanceCoachAPIRequest $request)
    {
        $input = $request->all();

        /** @var PerformanceCoach $performanceCoach */
        $performanceCoach = $this->performanceCoachRepository->find($id);

        if (empty($performanceCoach)) {
            return $this->sendError('Performance Coach not found');
        }

        $performanceCoach = $this->performanceCoachRepository->update($input, $id);

        return $this->sendResponse($performanceCoach->toArray(), 'PerformanceCoach updated successfully');
    }

    /**
     * Remove the specified PerformanceCoach from storage.
     * DELETE /performanceCoaches/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var PerformanceCoach $performanceCoach */
        $performanceCoach = $this->performanceCoachRepository->find($id);

        if (empty($performanceCoach)) {
            return $this->sendError('Performance Coach not found');
        }

        $this->deleteOneFile($performanceCoach, 'Profile');
        $this->deleteMultipleFile($performanceCoach, 'License');
        $performanceCoach->delete();

        return $this->sendSuccess('Performance Coach deleted successfully');
    }
}
