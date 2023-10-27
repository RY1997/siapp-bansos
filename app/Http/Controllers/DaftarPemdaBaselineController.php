<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDaftarPemdaBaselineRequest;
use App\Http\Requests\UpdateDaftarPemdaBaselineRequest;
use App\Models\DaftarOpd;
use App\Models\DaftarPemdaBaseline;
use App\Repositories\DaftarPemdaBaselineRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class DaftarPemdaBaselineController extends AppBaseController
{
    /** @var DaftarPemdaBaselineRepository $daftarPemdaBaselineRepository*/
    private $daftarPemdaBaselineRepository;

    public function __construct(DaftarPemdaBaselineRepository $daftarPemdaBaselineRepo)
    {
        $this->daftarPemdaBaselineRepository = $daftarPemdaBaselineRepo;
    }

    /**
     * Display a listing of the DaftarPemdaBaseline.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->role == 'Admin') {
            $daftarPemdaBaselines = DaftarPemdaBaseline::paginate(10);
        } elseif (Auth::user()->role == 'Perwakilan BPKP') {
            $daftarPemdaBaselines = DaftarPemdaBaseline::where(['kd_pwk' => Auth::user()->kd_pwk])->paginate(10);
        } elseif (Auth::user()->role == 'Pemerintah Daerah') {
            $daftarPemdaBaselines = DaftarPemdaBaseline::where(['nm_pemda' => Auth::user()->nm_pemda])->paginate(10);
        }

        return view('daftar_pemda_baselines.index')
            ->with('daftarPemdaBaselines', $daftarPemdaBaselines);
    }

    /**
     * Show the form for creating a new DaftarPemdaBaseline.
     *
     * @return Response
     */
    public function create()
    {
        return view('daftar_pemda_baselines.create');
    }

    /**
     * Store a newly created DaftarPemdaBaseline in storage.
     *
     * @param CreateDaftarPemdaBaselineRequest $request
     *
     * @return Response
     */
    public function store(CreateDaftarPemdaBaselineRequest $request)
    {
        $input = $request->all();

        $daftarPemdaBaseline = $this->daftarPemdaBaselineRepository->create($input);

        Flash::success('Daftar Pemda Baseline saved successfully.');

        return redirect(route('daftarPemdaBaselines.index'));
    }

    /**
     * Display the specified DaftarPemdaBaseline.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $daftarPemdaBaseline = $this->daftarPemdaBaselineRepository->find($id);

        if (empty($daftarPemdaBaseline)) {
            Flash::error('Daftar Pemda Baseline not found');

            return redirect(route('daftarPemdaBaselines.index'));
        }

        return view('daftar_pemda_baselines.show')->with('daftarPemdaBaseline', $daftarPemdaBaseline);
    }

    /**
     * Show the form for editing the specified DaftarPemdaBaseline.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $daftarPemdaBaseline = $this->daftarPemdaBaselineRepository->find($id);

        $daftarOpd = DaftarOpd::where('level', '2')->get();

        if (empty($daftarPemdaBaseline)) {
            Flash::error('Daftar Pemda Baseline not found');

            return redirect(route('daftarPemdaBaselines.index'));
        }

        return view('daftar_pemda_baselines.edit')->with(['daftarPemdaBaseline' => $daftarPemdaBaseline, 'daftarOpd' => $daftarOpd]);
    }

    /**
     * Update the specified DaftarPemdaBaseline in storage.
     *
     * @param int $id
     * @param UpdateDaftarPemdaBaselineRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDaftarPemdaBaselineRequest $request)
    {
        $daftarPemdaBaseline = $this->daftarPemdaBaselineRepository->find($id);

        if (empty($daftarPemdaBaseline)) {
            Flash::error('Daftar Pemda Baseline not found');

            return redirect(route('daftarPemdaBaselines.index'));
        }

        $daftarPemdaBaseline = $this->daftarPemdaBaselineRepository->update($request->all(), $id);

        Flash::success('Daftar Pemda Baseline updated successfully.');

        return redirect(url('daftarPemdaBaselines/'.$id.'/edit'));
    }

    /**
     * Remove the specified DaftarPemdaBaseline from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $daftarPemdaBaseline = $this->daftarPemdaBaselineRepository->find($id);

        if (empty($daftarPemdaBaseline)) {
            Flash::error('Daftar Pemda Baseline not found');

            return redirect(route('daftarPemdaBaselines.index'));
        }

        $this->daftarPemdaBaselineRepository->delete($id);

        Flash::success('Daftar Pemda Baseline deleted successfully.');

        return redirect(route('daftarPemdaBaselines.index'));
    }
}
