<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePsychPredictorAPIRequest;
use App\Http\Requests\API\UpdatePsychPredictorAPIRequest;
use App\Models\ClubAssesment;
use App\Models\PsychPredictor;
use App\Repositories\PsychPredictorRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PsychPredictorController
 * @group Psych Predictor
 * @package App\Http\Controllers\API
 */

class PsychPredictorAPIController extends AppBaseController
{
    /** @var  PsychPredictorRepository */
    private $psychPredictorRepository;

    public function __construct(PsychPredictorRepository $psychPredictorRepo)
    {
        $this->psychPredictorRepository = $psychPredictorRepo;
    }

    /**
     * Display a listing of the PsychPredictor.
     * GET|HEAD /psychPredictors
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $psychPredictors = $this->psychPredictorRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($psychPredictors->toArray(), 'Psych Predictors retrieved successfully');
    }

    /**
     * Store a newly created PsychPredictor in storage.
     * POST /psychPredictors
     *
     * @param CreatePsychPredictorAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePsychPredictorAPIRequest $request)
    {
        $input = $request->all();

        $psychPredictor = $this->psychPredictorRepository->create($input);

        return $this->sendResponse($psychPredictor->toArray(), 'Psych Predictor saved successfully');
    }

    /**
     * Display the specified PsychPredictor.
     * GET|HEAD /psychPredictors/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var PsychPredictor $psychPredictor */
        $psychPredictor = $this->psychPredictorRepository->find($id);

        if (empty($psychPredictor)) {
            return $this->sendError('Psych Predictor not found');
        }

        return $this->sendResponse($psychPredictor->toArray(), 'Psych Predictor retrieved successfully');
    }

    /**
     * Update the specified PsychPredictor in storage.
     * PUT/PATCH /psychPredictors/{id}
     *
     * @param int $id
     * @param UpdatePsychPredictorAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePsychPredictorAPIRequest $request)
    {
        $input = $request->all();

        /** @var PsychPredictor $psychPredictor */
        //$psychPredictor = $this->psychPredictorRepository->find($id);
        $psychPredictor = PsychPredictor::all()->first();
        if (empty($psychPredictor)) {
            return $this->sendError('Psych Predictor not found');
        }

        $psychPredictor = $this->psychPredictorRepository->update($input, $psychPredictor->id);

        return $this->sendResponse($psychPredictor->toArray(), 'PsychPredictor updated successfully');
    }

    /**
     * Remove the specified PsychPredictor from storage.
     * DELETE /psychPredictors/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var PsychPredictor $psychPredictor */
        $psychPredictor = $this->psychPredictorRepository->find($id);

        if (empty($psychPredictor)) {
            return $this->sendError('Psych Predictor not found');
        }

        $psychPredictor->delete();

        return $this->sendSuccess('Psych Predictor deleted successfully');
    }
}
