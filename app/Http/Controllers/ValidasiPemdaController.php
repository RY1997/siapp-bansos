<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValidasiPemdaRequest;
use App\Http\Requests\UpdateValidasiPemdaRequest;
use App\Models\DataRekening;
use App\Models\PemdaMonitoring;
use App\Models\UjiAktBansos;
use App\Repositories\ValidasiPemdaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ValidasiPemdaController extends AppBaseController
{
    /** @var ValidasiPemdaRepository $validasiPemdaRepository*/
    private $validasiPemdaRepository;

    public function __construct(ValidasiPemdaRepository $validasiPemdaRepo)
    {
        $this->validasiPemdaRepository = $validasiPemdaRepo;
    }

    /**
     * Display a listing of the ValidasiPemda.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $validasiPemdas = $this->validasiPemdaRepository->all();

        return view('validasi_pemdas.index')
            ->with('validasiPemdas', $validasiPemdas);
    }

    /**
     * Show the form for creating a new ValidasiPemda.
     *
     * @return Response
     */
    public function create()
    {
        return view('validasi_pemdas.create');
    }

    /**
     * Store a newly created ValidasiPemda in storage.
     *
     * @param CreateValidasiPemdaRequest $request
     *
     * @return Response
     */
    public function store(CreateValidasiPemdaRequest $request)
    {
        $input = $request->all();

        $validasiPemda = $this->validasiPemdaRepository->create($input);

        Flash::success('Validasi Pemda saved successfully.');

        return redirect(route('validasiPemdas.index'));
    }

    /**
     * Display the specified ValidasiPemda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        // $validasiPemda = $this->validasiPemdaRepository->find($id);

        $ujiAktBansos = UjiAktBansos::where('kd_pemda', $id)->orderBy('nm_opd')->get();

        $jenisBansos = $ujiAktBansos->groupBy('jenis');

        $validasiPemda = PemdaMonitoring::where('id', $id)->first();

        $dataRekening = DataRekening::where(['level' => 6])->get();

        return view('validasi_pemdas.show')
            ->with(['ujiAktBansos' => $ujiAktBansos, 'jenisBansos' => $jenisBansos, 'validasiPemda' => $validasiPemda, 'dataRekening' => $dataRekening]);
    }

    public function show_ringkasan($id_pemda)
    {
        $pemdaMonitoring = PemdaMonitoring::where('id' , $id_pemda)->get();
        $ujiMonitoring = PemdaMonitoring::where('data_baseline.id' , $id_pemda)->join('mon_bansos', 'data_baseline.id', '=', 'mon_bansos.kd_pemda')->get();

        return view('validasi_pemdas.ringkasan')->with(['pemdaMonitoring' => $pemdaMonitoring , 'ujiMonitoring'=> $ujiMonitoring]);
    }

    /**
     * Show the form for editing the specified ValidasiPemda.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $validasiPemda = $this->validasiPemdaRepository->find($id);

        if (empty($validasiPemda)) {
            Flash::error('Validasi Pemda not found');

            return redirect(route('validasiPemdas.index'));
        }

        return view('validasi_pemdas.edit')->with('validasiPemda', $validasiPemda);
    }

    /**
     * Update the specified ValidasiPemda in storage.
     *
     * @param int $id
     * @param UpdateValidasiPemdaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateValidasiPemdaRequest $request)
    {
        $validasiPemda = $this->validasiPemdaRepository->find($id);

        if (empty($validasiPemda)) {
            Flash::error('Validasi Pemda not found');

            return redirect(route('validasiPemdas.index'));
        }

        $validasiPemda = $this->validasiPemdaRepository->update($request->all(), $id);

        Flash::success('Validasi Pemda updated successfully.');

        return redirect(route('validasiPemdas.index'));
    }

    /**
     * Remove the specified ValidasiPemda from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $validasiPemda = $this->validasiPemdaRepository->find($id);

        if (empty($validasiPemda)) {
            Flash::error('Validasi Pemda not found');

            return redirect(route('validasiPemdas.index'));
        }

        $this->validasiPemdaRepository->delete($id);

        Flash::success('Validasi Pemda deleted successfully.');

        return redirect(route('validasiPemdas.index'));
    }
}
