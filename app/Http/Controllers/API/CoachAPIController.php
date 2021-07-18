<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCoachAPIRequest;
use App\Http\Requests\API\UpdateCoachAPIRequest;
use App\Http\Requests\API\UploadPicturesAPIRequest;
use App\Http\Requests\API\UploadProfileAPIRequest;
use App\Models\Coach;
use App\Repositories\CoachRepository;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;

/**
 * Class CoachController
 * @group Coach
 * @package App\Http\Controllers\API
 */
class CoachAPIController extends AppBaseController
{
    use FilesTrait;

    /** @var  CoachRepository */
    private $coachRepository;

    public function __construct(CoachRepository $coachRepo)
    {
        $this->coachRepository = $coachRepo;
    }

    /**
     * Display a listing of the Coach.
     * GET|HEAD /coaches
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $coaches = $this->coachRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($coaches->toArray(), 'Coaches retrieved successfully');
    }

    /**
     * Store a newly created Coach in storage.
     * POST /coaches
     *
     * @param CreateCoachAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCoachAPIRequest $request)
    {
        DB::beginTransaction();
        $input = $request->all();
        $input['name'] = $input['last_name'] . " " . $input['first_name'];
        $user = $this->createUser($input, 'coach');
        $input['user_id'] = $user->id;
        $coach = $this->coachRepository->create($input);
        $__response = $this->uploadOneFile($request, $coach, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        $__response = $this->uploadOneFile($request, $coach, 'License', 'license');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }

        DB::commit();
        if ($this->hasFile) {
            $coach = $this->coachRepository->find($coach->id);
            $mediaItems = $coach->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $this->coachRepository->update($input, $coach->id);
        }

        return $this->sendResponse($coach->toArray(), 'Coach saved successfully');
    }


     public function uploadProfile(UploadProfileAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = Coach::where('user_id', $user)->first();
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
        $response = Coach::where('user_id', $user)->first();
        $__response = $this->uploadMultipleFile($request, $response, 'License', 'pictures');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }

    /**
     * Display the specified Coach.
     * GET|HEAD /coaches/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Coach $coach */
        $coach = $this->coachRepository->find($id);

        if (empty($coach)) {
            return $this->sendError('Coach not found');
        }

        return $this->sendResponse($coach->toArray(), 'Coach retrieved successfully');
    }

    /**
     * Update the specified Coach in storage.
     * PUT/PATCH /coaches/{id}
     *
     * @param int $id
     * @param UpdateCoachAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCoachAPIRequest $request)
    {
        $input = $request->all();

        /** @var Coach $coach */
        $coach = $this->coachRepository->find($id);

        if (empty($coach)) {
            return $this->sendError('Coach not found');
        }

        $coach = $this->coachRepository->update($input, $id);

        return $this->sendResponse($coach->toArray(), 'Coach updated successfully');
    }

    /**
     * Remove the specified Coach from storage.
     * DELETE /coaches/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var Coach $coach */
        $coach = $this->coachRepository->find($id);

        if (empty($coach)) {
            return $this->sendError('Coach not found');
        }

        $this->deleteOneFile($coach, 'Profile');
        $this->deleteMultipleFile($coach, 'License');
        $coach->delete();

        return $this->sendSuccess('Coach deleted successfully');
    }
}
