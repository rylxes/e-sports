<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePhysioAPIRequest;
use App\Http\Requests\API\UpdatePhysioAPIRequest;
use App\Http\Requests\API\UploadPicturesAPIRequest;
use App\Http\Requests\API\UploadProfileAPIRequest;
use App\Models\Physio;
use App\Repositories\PhysioRepository;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;

/**
 * Class PhysioController
 * @group Physio
 * @package App\Http\Controllers\API
 */
class PhysioAPIController extends AppBaseController
{
    use FilesTrait;

    /** @var  PhysioRepository */
    private $physioRepository;

    public function __construct(PhysioRepository $physioRepo)
    {
        $this->physioRepository = $physioRepo;
    }

    /**
     * Display a listing of the Physio.
     * GET|HEAD /physios
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $physios = $this->physioRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($physios->toArray(), 'Physios retrieved successfully');
    }

    /**
     * Store a newly created Physio in storage.
     * POST /physios
     *
     * @param CreatePhysioAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePhysioAPIRequest $request)
    {
        DB::beginTransaction();
        $input = $request->all();
        $input['name'] = $input['last_name'] . " " . $input['first_name'];
        $user = $this->createUser($input, 'specialists');
        $input['user_id'] = $user->id;

        $physio = $this->physioRepository->create($input);
        $__response = $this->uploadOneFile($request, $physio, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        $__response = $this->uploadOneFile($request, $physio, 'License', 'license');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }

        DB::commit();
        if ($this->hasFile) {
            $physio = $this->physioRepository->find($physio->id);
            $mediaItems = $physio->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $physio = $this->physioRepository->update($input, $physio->id);
        }
        return $this->sendResponse($physio->toArray(), 'Physio saved successfully');
    }

    public function uploadProfile(UploadProfileAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = Physio::where('user_id', $user)->first();
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
        $response = Physio::where('user_id', $user)->first();
        $__response = $this->uploadMultipleFile($request, $response, 'License', 'pictures');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }

    /**
     * Display the specified Physio.
     * GET|HEAD /physios/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Physio $physio */
        $physio = $this->physioRepository->find($id);

        if (empty($physio)) {
            return $this->sendError('Physio not found');
        }

        return $this->sendResponse($physio->toArray(), 'Physio retrieved successfully');
    }

    /**
     * Update the specified Physio in storage.
     * PUT/PATCH /physios/{id}
     *
     * @param int $id
     * @param UpdatePhysioAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePhysioAPIRequest $request)
    {
        $input = $request->all();

        /** @var Physio $physio */
        $physio = $this->physioRepository->find($id);

        if (empty($physio)) {
            return $this->sendError('Physio not found');
        }

        $physio = $this->physioRepository->update($input, $id);

        return $this->sendResponse($physio->toArray(), 'Physio updated successfully');
    }

    /**
     * Remove the specified Physio from storage.
     * DELETE /physios/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var Physio $physio */
        $physio = $this->physioRepository->find($id);

        if (empty($physio)) {
            return $this->sendError('Physio not found');
        }

        $physio->delete();

        return $this->sendSuccess('Physio deleted successfully');
    }
}
