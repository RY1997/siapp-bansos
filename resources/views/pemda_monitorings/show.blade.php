@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Rincian Bantuan Sosial pada {{ $pemdaMonitoring->nm_pemda }}</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('pemdaMonitorings.index') }}">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        
        @include('flash::message')

        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('pemda_monitorings.show_fields')
                </div>
            </div>
            @if ($pemdaMonitoring->no_perda == NULL || $pemdaMonitoring->tgl_perda == NULL || $pemdaMonitoring->a_belanja_daerah < 1 || $pemdaMonitoring->r_belanja_daerah < 1 || $pemdaMonitoring->a_5_1_06 < 1 || $pemdaMonitoring->r_5_1_06 < 1 || $pemdaMonitoring->a_5_1_06 != $ujiAktBansos->where('kd_rek', 15)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 17)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 20)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 22)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 25)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 27)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 30)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 32)->sum('uji_anggaran') || $pemdaMonitoring->r_5_1_06 != $ujiAktBansos->where('kd_rek', 15)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 17)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 20)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 22)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 25)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 27)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 30)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 32)->sum('uji_realisasi') || $pemdaMonitoring->a_5_3 < 1 || $pemdaMonitoring->r_5_3 < 1 || $pemdaMonitoring->no_perkada_bansos == NULL || $pemdaMonitoring->tgl_perkada_bansos == NULL || $pemdaMonitoring->link == NULL)
            <div class="callout callout-danger bg-danger m-4">
                <h4 class="mb-3"><i class="icon fa fa-exclamation-triangle"></i> Catatan Ketidaksesuaian</h4>
                @if ($pemdaMonitoring->no_perda == NULL || $pemdaMonitoring->tgl_perda == NULL)
                <p class="mb-1">Nomor dan/atau Tanggal Peraturan Daerah tentang APBD belum diisi.</p>
                @endif

                @if ($pemdaMonitoring->a_belanja_daerah < 1 || $pemdaMonitoring->r_belanja_daerah < 1)
                <p class="mb-1">Anggaran dan/atau Realisasi Belanja Daerah belum diisi.</p>
                @endif

                @if ($pemdaMonitoring->a_5_1_06 < 1 || $pemdaMonitoring->r_5_1_06 < 1)
                <p class="mb-1">Anggaran dan/atau Realisasi Belanja Bantuan Sosial belum diisi.</p>
                @endif

                @if ($pemdaMonitoring->a_5_1_06 != $ujiAktBansos->where('kd_rek', 15)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 17)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 20)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 22)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 25)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 27)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 30)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 32)->sum('uji_anggaran') || $pemdaMonitoring->r_5_1_06 != $ujiAktBansos->where('kd_rek', 15)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 17)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 20)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 22)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 25)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 27)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 30)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 32)->sum('uji_realisasi'))
                <p class="mb-1">Anggaran dan/atau Realisasi Belanja Bantuan Sosial belum sesuai dengan rincian aktivitas.</p>
                @endif

                @if ($pemdaMonitoring->a_5_3 < 1 || $pemdaMonitoring->r_5_3 < 1)
                <p class="mb-1">Anggaran dan/atau Realisasi Belanja Tidak Terduga (BTT) belum diisi.</p>
                @endif

                @if ($pemdaMonitoring->a_5_1_02_01_01_0039 < 1 || $pemdaMonitoring->r_5_1_02_01_01_0039 < 1)
                <p class="mb-1">Belanja Barang untuk Dijual/Diserahkan kepada Masyarakat</p>
                @endif

                @if ($pemdaMonitoring->no_perkada_bansos == NULL || $pemdaMonitoring->tgl_perkada_bansos == NULL)
                <p class="mb-1">Nomor dan/atau tanggal Peraturan Kepala Daerah tentang Bantuan Sosial belum diisi.</p>
                @endif

                @if ($pemdaMonitoring->link == NULL)
                <p class="mb-1">Softfile Peraturan Kepala Daerah tentang Bantuan Sosial belum diisi.</p>
                @endif

            </div>
            @endif
            @if ($pemdaMonitoring->status != 'Final' || Auth::user()->role == 'Admin')
            <div class="card-footer">
                <div class="float-right">
                    <a href="{{ route('pemdaMonitorings.edit', [$pemdaMonitoring->id]) }}" class="btn btn-success"><i class="fa fa-pen"></i>  Isi Profil Pemda</a>
                </div>
            </div>
            @endif
        </div>

        @if ($pemdaMonitoring->a_belanja_daerah > 0)
        <div class="card p-3">
            <h6>Daftar Urusan/OPD</h6>
            <div class="card-body p-0 mt-2">
                @include('daftar_opds.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        <a class="btn btn-default float-right"
                        href="{{ route('pemdaMonitorings.index') }}">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    </div>
@endsection
