<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAgentAPIRequest;
use App\Http\Requests\API\UpdateAgentAPIRequest;
use App\Http\Requests\API\UploadPicturesAPIRequest;
use App\Http\Requests\API\UploadProfileAPIRequest;
use App\Models\Agent;
use App\Repositories\AgentRepository;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\DB;
use Response;

/**
 * Class AgentController
 * @group Agent
 * @package App\Http\Controllers\API
 */
class AgentAPIController extends AppBaseController
{
    use FilesTrait;

    /** @var  AgentRepository */
    private $agentRepository;

    public function __construct(AgentRepository $agentRepo)
    {
        $this->agentRepository = $agentRepo;
    }

    /**
     * Display a listing of the Agent.
     * GET|HEAD /agents
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $agents = $this->agentRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($agents->toArray(), 'Agents retrieved successfully');
    }

    /**
     * Store a newly created Agent in storage.
     * POST /agents
     *
     * @param CreateAgentAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateAgentAPIRequest $request)
    {
        DB::beginTransaction();
        $input = $request->all();
        $input['name'] = $input['last_name'] . " " . $input['first_name'];
        $user = $this->createUser($input, 'agents');
        $input['user_id'] = $user->id;
        $agent = $this->agentRepository->create($input);
        $__response = $this->uploadOneFile($request, $agent, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        $__response = $this->uploadOneFile($request, $agent, 'License', 'license');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }

        DB::commit();
        if ($this->hasFile) {
            $agent = $this->agentRepository->find($agent->id);
            $mediaItems = $agent->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $this->agentRepository->update($input, $agent->id);
        }
        return $this->sendResponse($agent->toArray(), 'Agent saved successfully');
    }


    public function uploadProfile(UploadProfileAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = Agent::where('user_id', $user)->first();
        $__response = $this->uploadOneFile($request, $response, 'Profile', 'file');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        if ($this->hasFile) {
            $agent = $this->agentRepository->find($response->id);
            $mediaItems = $agent->getMedia('Profile');
            $input['profile_url'] = $mediaItems[0]->getFullUrl();
            $response = $this->agentRepository->update($input, $agent->id);
        }
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }


    public function uploadPictures(UploadPicturesAPIRequest $request)
    {
        DB::beginTransaction();
        $user = auth()->user()->id;
        $response = Agent::where('user_id', $user)->first();
        $__response = $this->uploadMultipleFile($request, $response, 'License', 'pictures');
        if (!$this->isFileSuccess && $this->hasFile) {
            return $__response;
        }
        DB::commit();
        return $this->sendResponse($response->toArray(), 'Uploaded Successfully');
    }

    /**
     * Display the specified Agent.
     * GET|HEAD /agents/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Agent $agent */
        $agent = $this->agentRepository->find($id, ['media']);

        if (empty($agent)) {
            return $this->sendError('Agent not found');
        }

        return $this->sendResponse($agent->toArray(), 'Agent retrieved successfully');
    }

    /**
     * Update the specified Agent in storage.
     * PUT/PATCH /agents/{id}
     *
     * @param int $id
     * @param UpdateAgentAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAgentAPIRequest $request)
    {
        $input = $request->all();

        /** @var Agent $agent */
        $agent = $this->agentRepository->find($id);

        if (empty($agent)) {
            return $this->sendError('Agent not found');
        }

        $agent = $this->agentRepository->update($input, $id);

        return $this->sendResponse($agent->toArray(), 'Agent updated successfully');
    }

    /**
     * Remove the specified Agent from storage.
     * DELETE /agents/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var Agent $agent */
        $agent = $this->agentRepository->find($id);

        if (empty($agent)) {
            return $this->sendError('Agent not found');
        }

        $this->deleteOneFile($agent, 'Profile');
        $this->deleteMultipleFile($agent, 'License');
        $agent->delete();

        return $this->sendSuccess('Agent deleted successfully');
    }
}
