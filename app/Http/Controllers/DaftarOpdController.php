<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDaftarOpdRequest;
use App\Http\Requests\UpdateDaftarOpdRequest;
use App\Repositories\DaftarOpdRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DaftarOpdController extends AppBaseController
{
    /** @var DaftarOpdRepository $daftarOpdRepository*/
    private $daftarOpdRepository;

    public function __construct(DaftarOpdRepository $daftarOpdRepo)
    {
        $this->daftarOpdRepository = $daftarOpdRepo;
    }

    /**
     * Display a listing of the DaftarOpd.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $daftarOpds = $this->daftarOpdRepository->all();

        return view('daftar_opds.index')
            ->with('daftarOpds', $daftarOpds);
    }

    /**
     * Show the form for creating a new DaftarOpd.
     *
     * @return Response
     */
    public function create()
    {
        return view('daftar_opds.create');
    }

    /**
     * Store a newly created DaftarOpd in storage.
     *
     * @param CreateDaftarOpdRequest $request
     *
     * @return Response
     */
    public function store(CreateDaftarOpdRequest $request)
    {
        $input = $request->all();

        $daftarOpd = $this->daftarOpdRepository->create($input);

        Flash::success('Daftar Opd saved successfully.');

        return redirect(route('daftarOpds.index'));
    }

    /**
     * Display the specified DaftarOpd.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $daftarOpd = $this->daftarOpdRepository->find($id);

        if (empty($daftarOpd)) {
            Flash::error('Daftar Opd not found');

            return redirect(route('daftarOpds.index'));
        }

        return view('daftar_opds.show')->with('daftarOpd', $daftarOpd);
    }

    /**
     * Show the form for editing the specified DaftarOpd.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $daftarOpd = $this->daftarOpdRepository->find($id);

        if (empty($daftarOpd)) {
            Flash::error('Daftar Opd not found');

            return redirect(route('daftarOpds.index'));
        }

        return view('daftar_opds.edit')->with('daftarOpd', $daftarOpd);
    }

    /**
     * Update the specified DaftarOpd in storage.
     *
     * @param int $id
     * @param UpdateDaftarOpdRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDaftarOpdRequest $request)
    {
        $daftarOpd = $this->daftarOpdRepository->find($id);

        if (empty($daftarOpd)) {
            Flash::error('Daftar Opd not found');

            return redirect(route('daftarOpds.index'));
        }

        $daftarOpd = $this->daftarOpdRepository->update($request->all(), $id);

        Flash::success('Daftar Opd updated successfully.');

        return redirect(route('daftarOpds.index'));
    }

    /**
     * Remove the specified DaftarOpd from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $daftarOpd = $this->daftarOpdRepository->find($id);

        if (empty($daftarOpd)) {
            Flash::error('Daftar Opd not found');

            return redirect(route('daftarOpds.index'));
        }

        $this->daftarOpdRepository->delete($id);

        Flash::success('Daftar Opd deleted successfully.');

        return redirect(route('daftarOpds.index'));
    }
}
