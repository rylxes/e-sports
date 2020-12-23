<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClubAssesmentRequest;
use App\Http\Requests\UpdateClubAssesmentRequest;
use App\Repositories\ClubAssesmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ClubAssesmentController extends AppBaseController
{
    /** @var  ClubAssesmentRepository */
    private $clubAssesmentRepository;

    public function __construct(ClubAssesmentRepository $clubAssesmentRepo)
    {
        $this->clubAssesmentRepository = $clubAssesmentRepo;
    }

    /**
     * Display a listing of the ClubAssesment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clubAssesments = $this->clubAssesmentRepository->all();

        return view('club_assesments.index')
            ->with('clubAssesments', $clubAssesments);
    }

    /**
     * Show the form for creating a new ClubAssesment.
     *
     * @return Response
     */
    public function create()
    {
        return view('club_assesments.create');
    }

    /**
     * Store a newly created ClubAssesment in storage.
     *
     * @param CreateClubAssesmentRequest $request
     *
     * @return Response
     */
    public function store(CreateClubAssesmentRequest $request)
    {
        $input = $request->all();

        $clubAssesment = $this->clubAssesmentRepository->create($input);

        Flash::success('Club Assesment saved successfully.');

        return redirect(route('clubAssesments.index'));
    }

    /**
     * Display the specified ClubAssesment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clubAssesment = $this->clubAssesmentRepository->find($id);

        if (empty($clubAssesment)) {
            Flash::error('Club Assesment not found');

            return redirect(route('clubAssesments.index'));
        }

        return view('club_assesments.show')->with('clubAssesment', $clubAssesment);
    }

    /**
     * Show the form for editing the specified ClubAssesment.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clubAssesment = $this->clubAssesmentRepository->find($id);

        if (empty($clubAssesment)) {
            Flash::error('Club Assesment not found');

            return redirect(route('clubAssesments.index'));
        }

        return view('club_assesments.edit')->with('clubAssesment', $clubAssesment);
    }

    /**
     * Update the specified ClubAssesment in storage.
     *
     * @param int $id
     * @param UpdateClubAssesmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClubAssesmentRequest $request)
    {
        $clubAssesment = $this->clubAssesmentRepository->find($id);

        if (empty($clubAssesment)) {
            Flash::error('Club Assesment not found');

            return redirect(route('clubAssesments.index'));
        }

        $clubAssesment = $this->clubAssesmentRepository->update($request->all(), $id);

        Flash::success('Club Assesment updated successfully.');

        return redirect(route('clubAssesments.index'));
    }

    /**
     * Remove the specified ClubAssesment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clubAssesment = $this->clubAssesmentRepository->find($id);

        if (empty($clubAssesment)) {
            Flash::error('Club Assesment not found');

            return redirect(route('clubAssesments.index'));
        }

        $this->clubAssesmentRepository->delete($id);

        Flash::success('Club Assesment deleted successfully.');

        return redirect(route('clubAssesments.index'));
    }
}
