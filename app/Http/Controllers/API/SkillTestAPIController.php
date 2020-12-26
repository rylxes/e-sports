<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSkillTestAPIRequest;
use App\Http\Requests\API\UpdateSkillTestAPIRequest;
use App\Models\SkillTest;
use App\Repositories\SkillTestRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class SkillTestController
 * @group Skill Test
 * @package App\Http\Controllers\API
 */

class SkillTestAPIController extends AppBaseController
{
    /** @var  SkillTestRepository */
    private $skillTestRepository;

    public function __construct(SkillTestRepository $skillTestRepo)
    {
        $this->skillTestRepository = $skillTestRepo;
    }

    /**
     * Display a listing of the SkillTest.
     * GET|HEAD /skillTests
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $skillTests = $this->skillTestRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($skillTests->toArray(), 'Skill Tests retrieved successfully');
    }

    /**
     * Store a newly created SkillTest in storage.
     * POST /skillTests
     *
     * @param CreateSkillTestAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSkillTestAPIRequest $request)
    {
        $input = $request->all();

        $skillTest = $this->skillTestRepository->create($input);

        return $this->sendResponse($skillTest->toArray(), 'Skill Test saved successfully');
    }

    /**
     * Display the specified SkillTest.
     * GET|HEAD /skillTests/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var SkillTest $skillTest */
        $skillTest = $this->skillTestRepository->find($id);

        if (empty($skillTest)) {
            return $this->sendError('Skill Test not found');
        }

        return $this->sendResponse($skillTest->toArray(), 'Skill Test retrieved successfully');
    }

    /**
     * Update the specified SkillTest in storage.
     * PUT/PATCH /skillTests/{id}
     *
     * @param int $id
     * @param UpdateSkillTestAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSkillTestAPIRequest $request)
    {
        $input = $request->all();

        /** @var SkillTest $skillTest */
        $skillTest = $this->skillTestRepository->find($id);

        if (empty($skillTest)) {
            return $this->sendError('Skill Test not found');
        }

        $skillTest = $this->skillTestRepository->update($input, $id);

        return $this->sendResponse($skillTest->toArray(), 'SkillTest updated successfully');
    }

    /**
     * Remove the specified SkillTest from storage.
     * DELETE /skillTests/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var SkillTest $skillTest */
        $skillTest = $this->skillTestRepository->find($id);

        if (empty($skillTest)) {
            return $this->sendError('Skill Test not found');
        }

        $skillTest->delete();

        return $this->sendSuccess('Skill Test deleted successfully');
    }
}
