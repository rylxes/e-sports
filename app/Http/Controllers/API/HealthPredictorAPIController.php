<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateHealthPredictorAPIRequest;
use App\Http\Requests\API\UpdateHealthPredictorAPIRequest;
use App\Models\HealthPredictor;
use App\Repositories\HealthPredictorRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class HealthPredictorController
 * @group Health Predictor
 * @package App\Http\Controllers\API
 */

class HealthPredictorAPIController extends AppBaseController
{
    /** @var  HealthPredictorRepository */
    private $healthPredictorRepository;

    public function __construct(HealthPredictorRepository $healthPredictorRepo)
    {
        $this->healthPredictorRepository = $healthPredictorRepo;
    }

    /**
     * Display a listing of the HealthPredictor.
     * GET|HEAD /healthPredictors
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $healthPredictors = $this->healthPredictorRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($healthPredictors->toArray(), 'Health Predictors retrieved successfully');
    }

    /**
     * Store a newly created HealthPredictor in storage.
     * POST /healthPredictors
     *
     * @param CreateHealthPredictorAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateHealthPredictorAPIRequest $request)
    {
        $input = $request->all();

        $healthPredictor = $this->healthPredictorRepository->create($input);

        return $this->sendResponse($healthPredictor->toArray(), 'Health Predictor saved successfully');
    }

    /**
     * Display the specified HealthPredictor.
     * GET|HEAD /healthPredictors/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var HealthPredictor $healthPredictor */
        $healthPredictor = $this->healthPredictorRepository->find($id);

        if (empty($healthPredictor)) {
            return $this->sendError('Health Predictor not found');
        }

        return $this->sendResponse($healthPredictor->toArray(), 'Health Predictor retrieved successfully');
    }

    /**
     * Update the specified HealthPredictor in storage.
     * PUT/PATCH /healthPredictors/{id}
     *
     * @param int $id
     * @param UpdateHealthPredictorAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHealthPredictorAPIRequest $request)
    {
        $input = $request->all();

        /** @var HealthPredictor $healthPredictor */
        $healthPredictor = $this->healthPredictorRepository->find($id);

        if (empty($healthPredictor)) {
            return $this->sendError('Health Predictor not found');
        }

        $healthPredictor = $this->healthPredictorRepository->update($input, $id);

        return $this->sendResponse($healthPredictor->toArray(), 'HealthPredictor updated successfully');
    }

    /**
     * Remove the specified HealthPredictor from storage.
     * DELETE /healthPredictors/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var HealthPredictor $healthPredictor */
        $healthPredictor = $this->healthPredictorRepository->find($id);

        if (empty($healthPredictor)) {
            return $this->sendError('Health Predictor not found');
        }

        $healthPredictor->delete();

        return $this->sendSuccess('Health Predictor deleted successfully');
    }
}
