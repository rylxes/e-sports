<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTalentAPIRequest;
use App\Http\Requests\API\UpdateTalentAPIRequest;
use App\Http\Requests\API\UploadPicturesAPIRequest;
use App\Http\Requests\API\UploadProfileAPIRequest;
use App\Models\Talent;
use App\Repositories\TalentRepository;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;
use Spatie\Permission\Models\Role;

/**
 * Class TalentController
 * @group Talent
 * @package App\Http\Controllers\API
 */
class TalentAPIController extends AppBaseController
{
    /** @var  TalentRepository */
    private $talentRepository;
    use FilesTrait;

    public function __construct(TalentRepository $talentRepo)
    {
        $this->talentRepository = $talentRepo;
    }

    /**
     * Display a listing of the Talent.
     * GET|HEAD /talent
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $talent = $this->talentRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($talent->toArray(), 'Talent retrieved successfully');
    }

    /**
     * Store a newly created Talent in storage.
     * POST /talent
     *
     * @param CreateTalentAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTalentAPIRequest $request)
    {
        DB::beginTransaction();
        $input = $request->all();
        $input['name'] = $input['last_name'] . " " . $input['first_name'];
        $user = $this->createUser($input, 'talent');
        $input['user_id'] = $user->id;
        $talent = $this->talentRepository->create($input);
        $__response = $this->uploadOneFile($request, $talent, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        $__response = $this->uploadOneFile($request, $talent, 'Educational Background', 'qualifications');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }

        DB::commit();
        if ($this->hasFile) {
            $talent = $this->talentRepository->find($talent->id);
            $mediaItems = $talent->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $this->talentRepository->update($input, $talent->id);
        }
        return $this->sendResponse($talent->toArray(), 'Talent saved successfully');
    }


    public function uploadProfile(UploadProfileAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $talent = Talent::where('user_id', $user)->first();
        $__response = $this->uploadOneFile($request, $talent, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        if ($this->hasFile) {
            $talent = $this->talentRepository->find($talent->id);
            $mediaItems = $talent->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $talent = $this->talentRepository->update($input, $talent->id);
        }
        return $this->sendResponse($talent->toArray(), 'Uploaded Successfully');
    }


    public function uploadPictures(UploadPicturesAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $talent = Talent::where('user_id', $user)->first();
        $__response = $this->uploadMultipleFile($request, $talent, 'Educational Background', 'pictures');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        return $this->sendResponse($talent->toArray(), 'Uploaded Successfully');
    }


    /**
     * Display the specified Talent.
     * GET|HEAD /talent/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Talent $talent */
        $talent = $this->talentRepository->find($id, ['media']);
        // $talent = Talent::with('media')->find($id);
        if (empty($talent)) {
            return $this->sendError('Talent not found');
        }
        return $this->sendResponse($talent->toArray(), 'Talent retrieved successfully');
    }

    /**
     * Update the specified Talent in storage.
     * PUT/PATCH /talent/{id}
     *
     * @param int $id
     * @param UpdateTalentAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTalentAPIRequest $request)
    {
        $input = $request->all();

        /** @var Talent $talent */
        $talent = $this->talentRepository->find($id);

        if (empty($talent)) {
            return $this->sendError('Talent not found');
        }

        $talent = $this->talentRepository->update($input, $id);

        return $this->sendResponse($talent->toArray(), 'Talent updated successfully');
    }

    /**
     * Remove the specified Talent from storage.
     * DELETE /talent/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var Talent $talent */
        $talent = $this->talentRepository->find($id);

        if (empty($talent)) {
            return $this->sendError('Talent not found');
        }
        $this->deleteOneFile($talent, 'Profile');
        $this->deleteMultipleFile($talent, 'Educational Background');
        $talent->delete();

        return $this->sendSuccess('Talent deleted successfully');
    }


}
