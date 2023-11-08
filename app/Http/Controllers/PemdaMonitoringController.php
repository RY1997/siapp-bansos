<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePemdaMonitoringRequest;
use App\Http\Requests\UpdatePemdaMonitoringRequest;
use App\Models\DaftarOpd;
use App\Models\DaftarPemdaBaseline;
use App\Models\UjiAktBansos;
use App\Repositories\PemdaMonitoringRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class PemdaMonitoringController extends AppBaseController
{
    /** @var PemdaMonitoringRepository $pemdaMonitoringRepository*/
    private $pemdaMonitoringRepository;

    public function __construct(PemdaMonitoringRepository $pemdaMonitoringRepo)
    {
        $this->pemdaMonitoringRepository = $pemdaMonitoringRepo;
    }

    /**
     * Display a listing of the PemdaMonitoring.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->role == 'Admin') {
            $pemdaMonitorings = DaftarPemdaBaseline::where('nm_pemda', 'like', '%' . $request->query('pemda') . '%')->paginate(10);
        } elseif (Auth::user()->role == 'Perwakilan BPKP') {
            $pemdaMonitorings = DaftarPemdaBaseline::where('nm_pemda', 'like', '%' . $request->query('pemda') . '%')->where(['kd_pwk' => Auth::user()->kd_pwk])->paginate(10);
        } elseif (Auth::user()->role == 'Pemerintah Daerah') {
            $pemdaMonitorings = DaftarPemdaBaseline::where('nm_pemda', 'like', '%' . $request->query('pemda') . '%')->where(['nm_pemda' => Auth::user()->nm_pemda])->paginate(10);
        }
        
        $search = $request->query('pemda');

        return view('pemda_monitorings.index')
            ->with(['pemdaMonitorings' => $pemdaMonitorings , 'search' => $search]);
    }

    /**
     * Show the form for creating a new PemdaMonitoring.
     *
     * @return Response
     */
    public function create()
    {
        return view('pemda_monitorings.create');
    }

    /**
     * Store a newly created PemdaMonitoring in storage.
     *
     * @param CreatePemdaMonitoringRequest $request
     *
     * @return Response
     */
    public function store(CreatePemdaMonitoringRequest $request)
    {
        $input = $request->all();

        $pemdaMonitoring = $this->pemdaMonitoringRepository->create($input);

        Flash::success('Pemda Monitoring saved successfully.');

        return redirect(route('pemdaMonitorings.index'));
    }

    /**
     * Display the specified PemdaMonitoring.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pemdaMonitoring = $this->pemdaMonitoringRepository->find($id);

        $daftarOpd = DaftarOpd::where('level', '2')->get();

        $ujiAktBansos = UjiAktBansos::where('kd_pemda', $id)->get();

        if (empty($pemdaMonitoring)) {
            Flash::error('Pemerintah Daerah Tidak Ada');

            return redirect(route('pemdaMonitorings.index'));
        }

        if ($pemdaMonitoring->status != 'Final' || Auth::user()->role == 'Admin') {
            return view('pemda_monitorings.show')->with(['pemdaMonitoring' => $pemdaMonitoring, 'daftarOpd' => $daftarOpd, 'ujiAktBansos' => $ujiAktBansos]);
        } else {
            Flash::error('Data Sudah Difinalkan');
            return redirect(route('pemdaMonitorings.index'));
        }
    }

    /**
     * Show the form for editing the specified PemdaMonitoring.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pemdaMonitoring = $this->pemdaMonitoringRepository->find($id);

        if (empty($pemdaMonitoring)) {
            Flash::error('Pemda Monitoring not found');

            return redirect(route('pemdaMonitorings.index'));
        }

        return view('pemda_monitorings.edit')->with('pemdaMonitoring', $pemdaMonitoring);
    }

    /**
     * Update the specified PemdaMonitoring in storage.
     *
     * @param int $id
     * @param UpdatePemdaMonitoringRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePemdaMonitoringRequest $request)
    {
        $pemdaMonitoring = $this->pemdaMonitoringRepository->find($id);

        if (empty($pemdaMonitoring)) {
            Flash::error('Pemda Monitoring not found');

            return redirect(route('pemdaMonitorings.index'));
        }

        $pemdaMonitoring = $this->pemdaMonitoringRepository->update($request->all(), $id);

        $status = $this->pemdaMonitoringRepository->find($id);

        if ($status->status == 'Draft') {
            Flash::success('Pemda Monitoring updated successfully.');
            return redirect(route('pemdaMonitorings.show', $id));
        } else {
            Flash::success('Pemda Monitoring updated successfully.');
            return redirect(route('pemdaMonitorings.index'));
        }
    }

    /**
     * Remove the specified PemdaMonitoring from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pemdaMonitoring = $this->pemdaMonitoringRepository->find($id);

        if (empty($pemdaMonitoring)) {
            Flash::error('Pemda Monitoring not found');

            return redirect(route('pemdaMonitorings.index'));
        }

        $this->pemdaMonitoringRepository->delete($id);

        Flash::success('Pemda Monitoring deleted successfully.');

        return redirect(route('pemdaMonitorings.index'));
    }
}
