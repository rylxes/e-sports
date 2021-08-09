<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAcademyAPIRequest;
use App\Http\Requests\API\UpdateAcademyAPIRequest;
use App\Http\Requests\API\UploadPicturesAPIRequest;
use App\Http\Requests\API\UploadProfileAPIRequest;
use App\Models\Academy;
use App\Repositories\AcademyRepository;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;

/**
 * Class AcademyController
 * @group Academy
 * @package App\Http\Controllers\API
 */
class AcademyAPIController extends AppBaseController
{
    use FilesTrait;

    /** @var  AcademyRepository */
    private $academyRepository;

    public function __construct(AcademyRepository $academyRepo)
    {
        $this->academyRepository = $academyRepo;
    }

    /**
     * Display a listing of the Academy.
     * GET|HEAD /academies
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $academies = $this->academyRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($academies->toArray(), 'Academies retrieved successfully');
    }

    /**
     * Store a newly created Academy in storage.
     * POST /academies
     *
     * @param CreateAcademyAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateAcademyAPIRequest $request)
    {
        DB::beginTransaction();
        $input = $request->all();
        $user = $this->createUser($input, 'academies');
        $input['user_id'] = $user->id;
        $academy = $this->academyRepository->create($input);
        $__response = $this->uploadOneFile($request, $academy, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        $__response = $this->uploadOneFile($request, $academy, 'Pictures', 'pictures');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }

        DB::commit();
        if ($this->hasFile) {
            $academy = $this->academyRepository->find($academy->id);
            $mediaItems = $academy->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $academy = $this->academyRepository->update($input, $academy->id);
        }

        return $this->sendResponse($academy->toArray(), 'Academy saved successfully');
    }


    public function uploadProfile(UploadProfileAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = Academy::where('user_id', $user)->first();
        $__response = $this->uploadOneFile($request, $response, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        if ($this->hasFile) {
            $academy = $this->academyRepository->find($response->id);
            $mediaItems = $academy->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $response = $this->academyRepository->update($input, $academy->id);
        }
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }


    public function uploadPictures(UploadPicturesAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = Academy::where('user_id', $user)->first();
        $__response = $this->uploadMultipleFile($request, $response, 'Pictures', 'pictures');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }

    /**
     * Display the specified Academy.
     * GET|HEAD /academies/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Academy $academy */
        $academy = $this->academyRepository->find($id, ['media']);

        if (empty($academy)) {
            return $this->sendError('Academy not found');
        }

        return $this->sendResponse($academy->toArray(), 'Academy retrieved successfully');
    }

    /**
     * Update the specified Academy in storage.
     * PUT/PATCH /academies/{id}
     *
     * @param int $id
     * @param UpdateAcademyAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAcademyAPIRequest $request)
    {
        $input = $request->all();

        /** @var Academy $academy */
        $academy = $this->academyRepository->find($id);

        if (empty($academy)) {
            return $this->sendError('Academy not found');
        }

        $academy = $this->academyRepository->update($input, $id);

        return $this->sendResponse($academy->toArray(), 'Academy updated successfully');
    }

    /**
     * Remove the specified Academy from storage.
     * DELETE /academies/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var Academy $academy */
        $academy = $this->academyRepository->find($id);

        if (empty($academy)) {
            return $this->sendError('Academy not found');
        }

        $this->deleteOneFile($academy, 'Profile');
        $this->deleteMultipleFile($academy, 'Pictures');
        $academy->delete();

        return $this->sendSuccess('Academy deleted successfully');
    }
}
