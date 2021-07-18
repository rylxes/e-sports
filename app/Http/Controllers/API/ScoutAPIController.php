<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateScoutAPIRequest;
use App\Http\Requests\API\UpdateScoutAPIRequest;
use App\Http\Requests\API\UploadPicturesAPIRequest;
use App\Http\Requests\API\UploadProfileAPIRequest;
use App\Models\Scout;
use App\Repositories\ScoutRepository;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;

/**
 * Class ScoutController
 * @group Scout
 * @package App\Http\Controllers\API
 */
class ScoutAPIController extends AppBaseController
{
    use FilesTrait;

    /** @var  ScoutRepository */
    private $scoutRepository;

    public function __construct(ScoutRepository $scoutRepo)
    {
        $this->scoutRepository = $scoutRepo;
    }

    /**
     * Display a listing of the Scout.
     * GET|HEAD /scouts
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $scouts = $this->scoutRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($scouts->toArray(), 'Scouts retrieved successfully');
    }

    /**
     * Store a newly created Scout in storage.
     * POST /scouts
     *
     * @param CreateScoutAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateScoutAPIRequest $request)
    {
        DB::beginTransaction();
        $input = $request->all();
        $input['name'] = $input['last_name'] . " " . $input['first_name'];
        $user = $this->createUser($input, 'scout');
        $input['user_id'] = $user->id;
        $scout = $this->scoutRepository->create($input);
        $__response = $this->uploadOneFile($request, $scout, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        $__response = $this->uploadOneFile($request, $scout, 'License', 'license');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }

        DB::commit();
        if ($this->hasFile) {
            $scout = $this->scoutRepository->find($scout->id);
            $mediaItems = $scout->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $scout = $this->scoutRepository->update($input, $scout->id);
        }
        return $this->sendResponse($scout->toArray(), 'Scout saved successfully');
    }

     public function uploadProfile(UploadProfileAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = Scout::where('user_id', $user)->first();
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
        $response = Scout::where('user_id', $user)->first();
        $__response = $this->uploadMultipleFile($request, $response, 'License', 'pictures');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }

    /**
     * Display the specified Scout.
     * GET|HEAD /scouts/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Scout $scout */
        $scout = $this->scoutRepository->find($id);

        if (empty($scout)) {
            return $this->sendError('Scout not found');
        }

        return $this->sendResponse($scout->toArray(), 'Scout retrieved successfully');
    }

    /**
     * Update the specified Scout in storage.
     * PUT/PATCH /scouts/{id}
     *
     * @param int $id
     * @param UpdateScoutAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateScoutAPIRequest $request)
    {
        $input = $request->all();

        /** @var Scout $scout */
        $scout = $this->scoutRepository->find($id);

        if (empty($scout)) {
            return $this->sendError('Scout not found');
        }

        $scout = $this->scoutRepository->update($input, $id);

        return $this->sendResponse($scout->toArray(), 'Scout updated successfully');
    }

    /**
     * Remove the specified Scout from storage.
     * DELETE /scouts/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var Scout $scout */
        $scout = $this->scoutRepository->find($id);

        if (empty($scout)) {
            return $this->sendError('Scout not found');
        }

        $this->deleteOneFile($scout, 'Profile');
        $this->deleteMultipleFile($scout, 'License');
        $scout->delete();

        return $this->sendSuccess('Scout deleted successfully');
    }
}
