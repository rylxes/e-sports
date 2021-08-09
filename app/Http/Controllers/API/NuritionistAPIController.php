<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateNuritionistAPIRequest;
use App\Http\Requests\API\UpdateNuritionistAPIRequest;
use App\Http\Requests\API\UploadPicturesAPIRequest;
use App\Http\Requests\API\UploadProfileAPIRequest;
use App\Models\Nuritionist;
use App\Repositories\NuritionistRepository;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;

/**
 * Class NuritionistController
 * @group Nuritionist
 * @package App\Http\Controllers\API
 */
class NuritionistAPIController extends AppBaseController
{
    use FilesTrait;

    /** @var  NuritionistRepository */
    private $nuritionistRepository;

    public function __construct(NuritionistRepository $nuritionistRepo)
    {
        $this->nuritionistRepository = $nuritionistRepo;
    }

    /**
     * Display a listing of the Nuritionist.
     * GET|HEAD /nuritionists
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $nuritionists = $this->nuritionistRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($nuritionists->toArray(), 'Nuritionists retrieved successfully');
    }

    /**
     * Store a newly created Nuritionist in storage.
     * POST /nuritionists
     *
     * @param CreateNuritionistAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateNuritionistAPIRequest $request)
    {
        DB::beginTransaction();
        $input = $request->all();
        $input['name'] = $input['last_name'] . " " . $input['first_name'];
        $user = $this->createUser($input, 'nutritionist');
        $input['user_id'] = $user->id;
        $nuritionist = $this->nuritionistRepository->create($input);
        $__response = $this->uploadOneFile($request, $nuritionist, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        $__response = $this->uploadOneFile($request, $nuritionist, 'License', 'license');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }

        DB::commit();
        if ($this->hasFile) {
            $nuritionist = $this->nuritionistRepository->find($nuritionist->id);
            $mediaItems = $nuritionist->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $nuritionist = $this->nuritionistRepository->update($input, $nuritionist->id);
        }
        return $this->sendResponse($nuritionist->toArray(), 'Nuritionist saved successfully');
    }

    public function uploadProfile(UploadProfileAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = Nuritionist::where('user_id', $user)->first();
        $__response = $this->uploadOneFile($request, $response, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        if ($this->hasFile) {
            $nuritionist = $this->nuritionistRepository->find($response->id);
            $mediaItems = $nuritionist->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $response = $this->nuritionistRepository->update($input, $nuritionist->id);
        }
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }


    public function uploadPictures(UploadPicturesAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = Nuritionist::where('user_id', $user)->first();
        $__response = $this->uploadMultipleFile($request, $response, 'License', 'pictures');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }

    /**
     * Display the specified Nuritionist.
     * GET|HEAD /nuritionists/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Nuritionist $nuritionist */
        $nuritionist = $this->nuritionistRepository->find($id, ['media']);

        if (empty($nuritionist)) {
            return $this->sendError('Nuritionist not found');
        }

        return $this->sendResponse($nuritionist->toArray(), 'Nuritionist retrieved successfully');
    }

    /**
     * Update the specified Nuritionist in storage.
     * PUT/PATCH /nuritionists/{id}
     *
     * @param int $id
     * @param UpdateNuritionistAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNuritionistAPIRequest $request)
    {
        $input = $request->all();

        /** @var Nuritionist $nuritionist */
        $nuritionist = $this->nuritionistRepository->find($id);

        if (empty($nuritionist)) {
            return $this->sendError('Nuritionist not found');
        }

        $nuritionist = $this->nuritionistRepository->update($input, $id);

        return $this->sendResponse($nuritionist->toArray(), 'Nuritionist updated successfully');
    }

    /**
     * Remove the specified Nuritionist from storage.
     * DELETE /nuritionists/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var Nuritionist $nuritionist */
        $nuritionist = $this->nuritionistRepository->find($id);

        if (empty($nuritionist)) {
            return $this->sendError('Nuritionist not found');
        }

        $nuritionist->delete();

        return $this->sendSuccess('Nuritionist deleted successfully');
    }
}
