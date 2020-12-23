<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSkillReportAPIRequest;
use App\Http\Requests\API\UpdateSkillReportAPIRequest;
use App\Models\SkillReport;
use App\Repositories\SkillReportRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class SkillReportController
 * @package App\Http\Controllers\API
 */

class SkillReportAPIController extends AppBaseController
{
    /** @var  SkillReportRepository */
    private $skillReportRepository;

    public function __construct(SkillReportRepository $skillReportRepo)
    {
        $this->skillReportRepository = $skillReportRepo;
    }

    /**
     * Display a listing of the SkillReport.
     * GET|HEAD /skillReports
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $skillReports = $this->skillReportRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($skillReports->toArray(), 'Skill Reports retrieved successfully');
    }

    /**
     * Store a newly created SkillReport in storage.
     * POST /skillReports
     *
     * @param CreateSkillReportAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSkillReportAPIRequest $request)
    {
        $input = $request->all();

        $skillReport = $this->skillReportRepository->create($input);

        return $this->sendResponse($skillReport->toArray(), 'Skill Report saved successfully');
    }

    /**
     * Display the specified SkillReport.
     * GET|HEAD /skillReports/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var SkillReport $skillReport */
        $skillReport = $this->skillReportRepository->find($id);

        if (empty($skillReport)) {
            return $this->sendError('Skill Report not found');
        }

        return $this->sendResponse($skillReport->toArray(), 'Skill Report retrieved successfully');
    }

    /**
     * Update the specified SkillReport in storage.
     * PUT/PATCH /skillReports/{id}
     *
     * @param int $id
     * @param UpdateSkillReportAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSkillReportAPIRequest $request)
    {
        $input = $request->all();

        /** @var SkillReport $skillReport */
        $skillReport = $this->skillReportRepository->find($id);

        if (empty($skillReport)) {
            return $this->sendError('Skill Report not found');
        }

        $skillReport = $this->skillReportRepository->update($input, $id);

        return $this->sendResponse($skillReport->toArray(), 'SkillReport updated successfully');
    }

    /**
     * Remove the specified SkillReport from storage.
     * DELETE /skillReports/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var SkillReport $skillReport */
        $skillReport = $this->skillReportRepository->find($id);

        if (empty($skillReport)) {
            return $this->sendError('Skill Report not found');
        }

        $skillReport->delete();

        return $this->sendSuccess('Skill Report deleted successfully');
    }
}
