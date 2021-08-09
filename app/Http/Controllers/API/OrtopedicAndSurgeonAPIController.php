<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateOrtopedicAndSurgeonAPIRequest;
use App\Http\Requests\API\UpdateOrtopedicAndSurgeonAPIRequest;
use App\Http\Requests\API\UploadPicturesAPIRequest;
use App\Http\Requests\API\UploadProfileAPIRequest;
use App\Models\OrtopedicAndSurgeon;
use App\Repositories\OrtopedicAndSurgeonRepository;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;

/**
 * Class OrtopedicAndSurgeonController
 * @group Ortopedic And Surgeon
 * @package App\Http\Controllers\API
 */
class OrtopedicAndSurgeonAPIController extends AppBaseController
{
    use FilesTrait;

    /** @var  OrtopedicAndSurgeonRepository */
    private $ortopedicAndSurgeonRepository;

    public function __construct(OrtopedicAndSurgeonRepository $ortopedicAndSurgeonRepo)
    {
        $this->ortopedicAndSurgeonRepository = $ortopedicAndSurgeonRepo;
    }

    /**
     * Display a listing of the OrtopedicAndSurgeon.
     * GET|HEAD /ortopedicAndSurgeons
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $ortopedicAndSurgeons = $this->ortopedicAndSurgeonRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($ortopedicAndSurgeons->toArray(), 'Ortopedic And Surgeons retrieved successfully');
    }

    /**
     * Store a newly created OrtopedicAndSurgeon in storage.
     * POST /ortopedicAndSurgeons
     *
     * @param CreateOrtopedicAndSurgeonAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateOrtopedicAndSurgeonAPIRequest $request)
    {
        DB::beginTransaction();
        $input = $request->all();
        $input['name'] = $input['last_name'] . " " . $input['first_name'];
        $user = $this->createUser($input, 'specialists');
        $input['user_id'] = $user->id;
        $ortopedicAndSurgeon = $this->ortopedicAndSurgeonRepository->create($input);
        $__response = $this->uploadOneFile($request, $ortopedicAndSurgeon, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        $__response = $this->uploadOneFile($request, $ortopedicAndSurgeon, 'License', 'license');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }

        DB::commit();
        if ($this->hasFile) {
            $ortopedicAndSurgeon = $this->ortopedicAndSurgeonRepository->find($ortopedicAndSurgeon->id);
            $mediaItems = $ortopedicAndSurgeon->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $ortopedicAndSurgeon = $this->ortopedicAndSurgeonRepository->update($input, $ortopedicAndSurgeon->id);
        }
        return $this->sendResponse($ortopedicAndSurgeon->toArray(), 'Ortopedic And Surgeon saved successfully');
    }


    public function uploadProfile(UploadProfileAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = OrtopedicAndSurgeon::where('user_id', $user)->first();
        $__response = $this->uploadOneFile($request, $response, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        if ($this->hasFile) {
            $ortopedicAndSurgeon = $this->ortopedicAndSurgeonRepository->find($response->id);
            $mediaItems = $ortopedicAndSurgeon->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $response = $this->ortopedicAndSurgeonRepository->update($input, $ortopedicAndSurgeon->id);
        }
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }


    public function uploadPictures(UploadPicturesAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = OrtopedicAndSurgeon::where('user_id', $user)->first();
        $__response = $this->uploadMultipleFile($request, $response, 'License', 'pictures');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }


    /**
     * Display the specified OrtopedicAndSurgeon.
     * GET|HEAD /ortopedicAndSurgeons/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var OrtopedicAndSurgeon $ortopedicAndSurgeon */
        $ortopedicAndSurgeon = $this->ortopedicAndSurgeonRepository->find($id, ['media']);

        if (empty($ortopedicAndSurgeon)) {
            return $this->sendError('Ortopedic And Surgeon not found');
        }

        return $this->sendResponse($ortopedicAndSurgeon->toArray(), 'Ortopedic And Surgeon retrieved successfully');
    }

    /**
     * Update the specified OrtopedicAndSurgeon in storage.
     * PUT/PATCH /ortopedicAndSurgeons/{id}
     *
     * @param int $id
     * @param UpdateOrtopedicAndSurgeonAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrtopedicAndSurgeonAPIRequest $request)
    {
        $input = $request->all();

        /** @var OrtopedicAndSurgeon $ortopedicAndSurgeon */
        $ortopedicAndSurgeon = $this->ortopedicAndSurgeonRepository->find($id);

        if (empty($ortopedicAndSurgeon)) {
            return $this->sendError('Ortopedic And Surgeon not found');
        }

        $ortopedicAndSurgeon = $this->ortopedicAndSurgeonRepository->update($input, $id);

        return $this->sendResponse($ortopedicAndSurgeon->toArray(), 'OrtopedicAndSurgeon updated successfully');
    }

    /**
     * Remove the specified OrtopedicAndSurgeon from storage.
     * DELETE /ortopedicAndSurgeons/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var OrtopedicAndSurgeon $ortopedicAndSurgeon */
        $ortopedicAndSurgeon = $this->ortopedicAndSurgeonRepository->find($id);

        if (empty($ortopedicAndSurgeon)) {
            return $this->sendError('Ortopedic And Surgeon not found');
        }

        $ortopedicAndSurgeon->delete();

        return $this->sendSuccess('Ortopedic And Surgeon deleted successfully');
    }
}
