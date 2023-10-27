<?php

namespace App\Http\Controllers;

use App\Models\PemdaMonitoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //filter PemdaMonitoring
        if (Auth::user()->role == 'Admin') {
            $pemdaMonitoring = PemdaMonitoring::all();
            $ujiMonitoring = PemdaMonitoring::join('mon_bansos', 'data_baseline.id', '=', 'mon_bansos.kd_pemda')->get();
        } elseif (Auth::user()->role == 'Perwakilan BPKP') {
            $pemdaMonitoring = PemdaMonitoring::where('kd_pwk' , Auth::user()->kd_pwk)->get();
            $ujiMonitoring = PemdaMonitoring::where('kd_pwk' , Auth::user()->kd_pwk)->join('mon_bansos', 'data_baseline.id', '=', 'mon_bansos.kd_pemda')->get();
        } else {
            $pemdaMonitoring = PemdaMonitoring::where('nm_pemda' , Auth::user()->nm_pemda)->get();
            $ujiMonitoring = PemdaMonitoring::where('nm_pemda' , Auth::user()->nm_pemda)->join('mon_bansos', 'data_baseline.id', '=', 'mon_bansos.kd_pemda')->get();
        }

        //tabel burden-sharing
        // $a_pkh = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_anggaran');
        // $r_pkh = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_realisasi');
        // $a_bpnt = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai')->sum('uji_anggaran');
        // $r_bpnt = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai')->sum('uji_realisasi');
        // $a_pip = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_anggaran');
        // $r_pip = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_realisasi');
        // $a_bsps = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_anggaran');
        // $r_bsps = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_realisasi');
        // $a_jkn = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_anggaran');
        // $r_jkn = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_realisasi');
        // $a_bltumkm = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_anggaran');
        // $r_bltumkm = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_realisasi');
        // $a_lainnya = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Bantuan Lainnya')->sum('uji_anggaran');
        // $r_lainnya = $ujiMonitoring->where('mon_bansos.uji_bansos_sejenis' , 'Bantuan Lainnya')->sum('uji_realisasi');
        
        return view('home')->with(['pemdaMonitoring' => $pemdaMonitoring , 'ujiMonitoring' => $ujiMonitoring]);
    }
}
