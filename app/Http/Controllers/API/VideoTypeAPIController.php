<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateVideoTypeAPIRequest;
use App\Http\Requests\API\UpdateVideoTypeAPIRequest;
use App\Models\VideoType;
use App\Repositories\VideoTypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class VideoTypeController
 * @package App\Http\Controllers\API
 */

class VideoTypeAPIController extends AppBaseController
{
    /** @var  VideoTypeRepository */
    private $videoTypeRepository;

    public function __construct(VideoTypeRepository $videoTypeRepo)
    {
        $this->videoTypeRepository = $videoTypeRepo;
    }

    /**
     * Display a listing of the VideoType.
     * GET|HEAD /videoTypes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $videoTypes = $this->videoTypeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($videoTypes->toArray(), 'Video Types retrieved successfully');
    }

    /**
     * Store a newly created VideoType in storage.
     * POST /videoTypes
     *
     * @param CreateVideoTypeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateVideoTypeAPIRequest $request)
    {
        $input = $request->all();

        $videoType = $this->videoTypeRepository->create($input);

        return $this->sendResponse($videoType->toArray(), 'Video Type saved successfully');
    }

    /**
     * Display the specified VideoType.
     * GET|HEAD /videoTypes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var VideoType $videoType */
        $videoType = $this->videoTypeRepository->find($id);

        if (empty($videoType)) {
            return $this->sendError('Video Type not found');
        }

        return $this->sendResponse($videoType->toArray(), 'Video Type retrieved successfully');
    }

    /**
     * Update the specified VideoType in storage.
     * PUT/PATCH /videoTypes/{id}
     *
     * @param int $id
     * @param UpdateVideoTypeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVideoTypeAPIRequest $request)
    {
        $input = $request->all();

        /** @var VideoType $videoType */
        $videoType = $this->videoTypeRepository->find($id);

        if (empty($videoType)) {
            return $this->sendError('Video Type not found');
        }

        $videoType = $this->videoTypeRepository->update($input, $id);

        return $this->sendResponse($videoType->toArray(), 'VideoType updated successfully');
    }

    /**
     * Remove the specified VideoType from storage.
     * DELETE /videoTypes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var VideoType $videoType */
        $videoType = $this->videoTypeRepository->find($id);

        if (empty($videoType)) {
            return $this->sendError('Video Type not found');
        }

        $videoType->delete();

        return $this->sendSuccess('Video Type deleted successfully');
    }
}
