<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTesRequest;
use App\Http\Requests\UpdateTesRequest;
use App\Repositories\TesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TesController extends AppBaseController
{
    /** @var TesRepository $tesRepository*/
    private $tesRepository;

    public function __construct(TesRepository $tesRepo)
    {
        $this->tesRepository = $tesRepo;
    }

    /**
     * Display a listing of the Tes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tes = $this->tesRepository->all();

        return view('tes.index')
            ->with('tes', $tes);
    }

    /**
     * Show the form for creating a new Tes.
     *
     * @return Response
     */
    public function create()
    {
        return view('tes.create');
    }

    /**
     * Store a newly created Tes in storage.
     *
     * @param CreateTesRequest $request
     *
     * @return Response
     */
    public function store(CreateTesRequest $request)
    {
        $input = $request->all();

        $tes = $this->tesRepository->create($input);

        Flash::success('Tes saved successfully.');

        return redirect(route('tes.index'));
    }

    /**
     * Display the specified Tes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tes = $this->tesRepository->find($id);

        if (empty($tes)) {
            Flash::error('Tes not found');

            return redirect(route('tes.index'));
        }

        return view('tes.show')->with('tes', $tes);
    }

    /**
     * Show the form for editing the specified Tes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tes = $this->tesRepository->find($id);

        if (empty($tes)) {
            Flash::error('Tes not found');

            return redirect(route('tes.index'));
        }

        return view('tes.edit')->with('tes', $tes);
    }

    /**
     * Update the specified Tes in storage.
     *
     * @param int $id
     * @param UpdateTesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTesRequest $request)
    {
        $tes = $this->tesRepository->find($id);

        if (empty($tes)) {
            Flash::error('Tes not found');

            return redirect(route('tes.index'));
        }

        $tes = $this->tesRepository->update($request->all(), $id);

        Flash::success('Tes updated successfully.');

        return redirect(route('tes.index'));
    }

    /**
     * Remove the specified Tes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tes = $this->tesRepository->find($id);

        if (empty($tes)) {
            Flash::error('Tes not found');

            return redirect(route('tes.index'));
        }

        $this->tesRepository->delete($id);

        Flash::success('Tes deleted successfully.');

        return redirect(route('tes.index'));
    }
}
