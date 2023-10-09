<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUjiAktBansosRequest;
use App\Http\Requests\UpdateUjiAktBansosRequest;
use App\Models\DaftarOpd;
use App\Models\DaftarPemdaBaseline;
use App\Models\DataRekening;
use App\Models\UjiAktBansos;
use App\Repositories\UjiAktBansosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UjiAktBansosController extends AppBaseController
{
    /** @var UjiAktBansosRepository $ujiAktBansosRepository*/
    private $ujiAktBansosRepository;

    public function __construct(UjiAktBansosRepository $ujiAktBansosRepo)
    {
        $this->ujiAktBansosRepository = $ujiAktBansosRepo;
    }

    /**
     * Display a listing of the UjiAktBansos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ujiAktBansos = $this->ujiAktBansosRepository->all();

        return view('uji_akt_bansos.index')
            ->with('ujiAktBansos', $ujiAktBansos);
    }

    public function indexaktbansos($pemda_id, $opd_id)
    {
        $ujiAktBansos = UjiAktBansos::where(['kd_pemda' => $pemda_id, 'kd_opd' => $opd_id])->get();
        $jenisBansos = $ujiAktBansos->groupBy('jenis');

        $daftarPemdaBaseline = DaftarPemdaBaseline::where(['id' => $pemda_id])->first();

        $daftarOpd = DaftarOpd::where(['id' => $opd_id])->first();

        $dataRekening = DataRekening::where(['level' => 6])->get();

        return view('uji_akt_bansos.index')
            ->with(['ujiAktBansos' => $ujiAktBansos, 'jenisBansos' => $jenisBansos, 'daftarPemdaBaseline' => $daftarPemdaBaseline, 'daftarOpd' => $daftarOpd, 'dataRekening' => $dataRekening]);
    }

    /**
     * Show the form for creating a new UjiAktBansos.
     *
     * @return Response
     */
    public function create()
    {
        return view('uji_akt_bansos.create');
    }

    public function createaktbansos($pemda_id, $opd_id, $rek_id)
    {
        $daftarPemdaBaseline = DaftarPemdaBaseline::where(['id' => $pemda_id])->first();

        $daftarOpd = DaftarOpd::where(['id' => $opd_id])->first();

        $dataRekening = DataRekening::where(['id' => $rek_id])->first();
        
        return view('uji_akt_bansos.create')
            ->with(['daftarPemdaBaseline' => $daftarPemdaBaseline, 'daftarOpd' => $daftarOpd, 'dataRekening' => $dataRekening]);
    }

    /**
     * Store a newly created UjiAktBansos in storage.
     *
     * @param CreateUjiAktBansosRequest $request
     *
     * @return Response
     */
    public function store(CreateUjiAktBansosRequest $request)
    {
        $input = $request->all();

        $ujiAktBansos = $this->ujiAktBansosRepository->create($input);

        Flash::success('Uji Akt Bansos saved successfully.');

        return redirect(url('/ujiAktBansos/'.$request->kd_pemda.'/'.$request->kd_opd.'/'));
    }

    /**
     * Display the specified UjiAktBansos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ujiAktBansos = $this->ujiAktBansosRepository->find($id);

        if (empty($ujiAktBansos)) {
            Flash::error('Uji Akt Bansos not found');

            return redirect(route('ujiAktBansos.index'));
        }

        return view('uji_akt_bansos.show')->with('ujiAktBansos', $ujiAktBansos);
    }

    /**
     * Show the form for editing the specified UjiAktBansos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ujiAktBansos = $this->ujiAktBansosRepository->find($id);

        $daftarPemdaBaseline = DaftarPemdaBaseline::where(['id' => $ujiAktBansos->kd_pemda])->first();

        $daftarOpd = DaftarOpd::where(['id' => $ujiAktBansos->kd_opd])->first();

        $dataRekening = DataRekening::where(['id' => $ujiAktBansos->kd_rek])->first();

        if (empty($ujiAktBansos)) {
            Flash::error('Uji Akt Bansos not found');

            return redirect(route('ujiAktBansos.index'));
        }

        return view('uji_akt_bansos.edit')->with(['ujiAktBansos' => $ujiAktBansos , 'daftarPemdaBaseline' => $daftarPemdaBaseline, 'daftarOpd' => $daftarOpd, 'dataRekening' => $dataRekening]);
    }

    /**
     * Update the specified UjiAktBansos in storage.
     *
     * @param int $id
     * @param UpdateUjiAktBansosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUjiAktBansosRequest $request)
    {
        $ujiAktBansos = $this->ujiAktBansosRepository->find($id);

        if (empty($ujiAktBansos)) {
            Flash::error('Uji Akt Bansos not found');

            return redirect(route('ujiAktBansos.index'));
        }

        $ujiAktBansos = $this->ujiAktBansosRepository->update($request->all(), $id);

        Flash::success('Uji Akt Bansos updated successfully.');

        return redirect(url('/ujiAktBansos/'.$request->kd_pemda.'/'.$request->kd_opd.'/'));
    }

    /**
     * Remove the specified UjiAktBansos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ujiAktBansos = $this->ujiAktBansosRepository->find($id);

        if (empty($ujiAktBansos)) {
            Flash::error('Uji Akt Bansos not found');

            return redirect(route('ujiAktBansos.index'));
        }

        $this->ujiAktBansosRepository->delete($id);

        Flash::success('Uji Akt Bansos deleted successfully.');

        return redirect(url('/ujiAktBansos/'.$ujiAktBansos->kd_pemda.'/'.$ujiAktBansos->kd_opd.'/'));
    }
}
