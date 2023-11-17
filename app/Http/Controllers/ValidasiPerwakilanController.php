<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValidasiPerwakilanRequest;
use App\Http\Requests\UpdateValidasiPerwakilanRequest;
use App\Models\DataPemda;
use App\Models\PemdaMonitoring;
use App\Models\UjiAktBansos;
use App\Repositories\ValidasiPerwakilanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class ValidasiPerwakilanController extends AppBaseController
{
    /** @var ValidasiPerwakilanRepository $validasiPerwakilanRepository*/
    private $validasiPerwakilanRepository;

    public function __construct(ValidasiPerwakilanRepository $validasiPerwakilanRepo)
    {
        $this->validasiPerwakilanRepository = $validasiPerwakilanRepo;
    }

    /**
     * Display a listing of the ValidasiPerwakilan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $validasiPerwakilans = DataPemda::join('data_baseline' , 'data_pemda.id' , '=' , 'data_baseline.id')->groupBy('data_pemda.kd_pwk')->selectRaw('*, sum(a_5_1_06) as sum_a_5_1_06, sum(r_5_1_06) as sum_r_5_1_06')->orderBy('data_baseline.kd_pwk' , 'ASC');

        $rincianBansos = UjiAktBansos::whereBetween('kd_rek', [15, 32])->join('data_baseline' , 'mon_bansos.kd_pemda' , '=' , 'data_baseline.id')->get();

        if (Auth::user()->role == 'Admin') {
            $validasiPerwakilans = $validasiPerwakilans->get();
        } else {
            $validasiPerwakilans = $validasiPerwakilans->where('data_pemda.kd_pwk', Auth::user()->kd_pwk)->get();
        }

        return view('validasi_perwakilans.index')
            ->with(['validasiPerwakilans' => $validasiPerwakilans , 'rincianBansos'=> $rincianBansos]);
    }

    /**
     * Show the form for creating a new ValidasiPerwakilan.
     *
     * @return Response
     */
    public function create()
    {
        return view('validasi_perwakilans.create');
    }

    /**
     * Store a newly created ValidasiPerwakilan in storage.
     *
     * @param CreateValidasiPerwakilanRequest $request
     *
     * @return Response
     */
    public function store(CreateValidasiPerwakilanRequest $request)
    {
        $input = $request->all();

        $validasiPerwakilan = $this->validasiPerwakilanRepository->create($input);

        Flash::success('Validasi Perwakilan saved successfully.');

        return redirect(route('validasiPerwakilans.index'));
    }

    /**
     * Display the specified ValidasiPerwakilan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if (Auth::user()->role != 'Pemerintah Daerah') {
            if (Auth::user()->kd_pwk == 'PW12') {
                $validasiPemdas = DataPemda::where('data_baseline.kd_pwk', $id)->orWhere('data_baseline.nm_pemda', 'Kab. Cilacap')->orWhere('data_baseline.nm_pemda', 'Kab. Kebumen')->orWhere('data_baseline.nm_pemda', 'Kab. Magelang')->orWhere('data_baseline.nm_pemda', 'Kota Magelang')->orWhere('data_baseline.nm_pemda', 'Kab. Purworejo')->orWhere('data_baseline.nm_pemda', 'Kab. Klaten')->join('data_baseline' , 'data_pemda.id' , '=' , 'data_baseline.id')->groupBy('data_pemda.nm_pemda')->orderBy('data_baseline.id')->get();
            } else {
                $validasiPemdas = DataPemda::where('data_baseline.kd_pwk', $id)->join('data_baseline' , 'data_pemda.id' , '=' , 'data_baseline.id')->groupBy('data_pemda.nm_pemda')->orderBy('data_baseline.id')->get();
            }
        } else {
            $validasiPemdas = DataPemda::where('data_baseline.kd_pwk', $id)->where('data_baseline.nm_pemda', Auth::user()->nm_pemda)->join('data_baseline' , 'data_pemda.id' , '=' , 'data_baseline.id')->groupBy('data_pemda.nm_pemda')->orderBy('data_baseline.id')->get();
        }

        $rincianBansos = UjiAktBansos::where('data_baseline.kd_pwk', $id)->whereBetween('kd_rek', [15, 32])->join('data_baseline' , 'mon_bansos.kd_pemda' , '=' , 'data_baseline.id')->groupBy('nm_pemda')->selectRaw('*, sum(uji_anggaran) as sum_uji_anggaran, sum(uji_realisasi) as sum_uji_realisasi')->get();

        if (empty($validasiPemdas)) {
            Flash::error('Validasi Perwakilan not found');

            return redirect(route('validasiPerwakilans.index'));
        }

        return view('validasi_perwakilans.show')->with(['validasiPemdas' => $validasiPemdas , 'rincianBansos'=> $rincianBansos]);
    }

    public function show_ringkasan($kd_pwk)
    {
        // $validasiPerwakilan = $this->validasiPerwakilanRepository->find($id);

        $pemdaMonitoring = PemdaMonitoring::where('kd_pwk' , $kd_pwk)->get();
        $ujiMonitoring = PemdaMonitoring::where('kd_pwk' , $kd_pwk)->join('mon_bansos', 'data_baseline.id', '=', 'mon_bansos.kd_pemda')->get();

        return view('validasi_perwakilans.ringkasan')->with(['pemdaMonitoring' => $pemdaMonitoring , 'ujiMonitoring'=> $ujiMonitoring]);
    }

    /**
     * Show the form for editing the specified ValidasiPerwakilan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $validasiPerwakilan = $this->validasiPerwakilanRepository->find($id);

        if (empty($validasiPerwakilan)) {
            Flash::error('Validasi Perwakilan not found');

            return redirect(route('validasiPerwakilans.index'));
        }

        return view('validasi_perwakilans.edit')->with('validasiPerwakilan', $validasiPerwakilan);
    }

    /**
     * Update the specified ValidasiPerwakilan in storage.
     *
     * @param int $id
     * @param UpdateValidasiPerwakilanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateValidasiPerwakilanRequest $request)
    {
        $validasiPerwakilan = $this->validasiPerwakilanRepository->find($id);

        if (empty($validasiPerwakilan)) {
            Flash::error('Validasi Perwakilan not found');

            return redirect(route('validasiPerwakilans.index'));
        }

        $validasiPerwakilan = $this->validasiPerwakilanRepository->update($request->all(), $id);

        Flash::success('Validasi Perwakilan updated successfully.');

        return redirect(route('validasiPerwakilans.index'));
    }

    /**
     * Remove the specified ValidasiPerwakilan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $validasiPerwakilan = $this->validasiPerwakilanRepository->find($id);

        if (empty($validasiPerwakilan)) {
            Flash::error('Validasi Perwakilan not found');

            return redirect(route('validasiPerwakilans.index'));
        }

        $this->validasiPerwakilanRepository->delete($id);

        Flash::success('Validasi Perwakilan deleted successfully.');

        return redirect(route('validasiPerwakilans.index'));
    }
}
