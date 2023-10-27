@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Rincian Bansos pada {{ $validasiPemda->nm_pemda }}</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('validasiPerwakilans.show', [$validasiPemda->kd_pwk]) }}">
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
                    @include('validasi_pemdas.show_fields')
                </div>
            </div>
            @if ($validasiPemda->no_perda == NULL || $validasiPemda->tgl_perda == NULL || $validasiPemda->a_belanja_daerah < 1 || $validasiPemda->r_belanja_daerah < 1 || $validasiPemda->a_5_1_06 < 1 || $validasiPemda->r_5_1_06 < 1 || $validasiPemda->a_5_1_06 != $ujiAktBansos->where('kd_rek', 15)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 17)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 20)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 22)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 25)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 27)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 30)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 32)->sum('uji_anggaran') || $validasiPemda->r_5_1_06 != $ujiAktBansos->where('kd_rek', 15)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 17)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 20)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 22)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 25)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 27)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 30)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 32)->sum('uji_realisasi') || $validasiPemda->a_5_3 < 1 || $validasiPemda->r_5_3 < 1 || $validasiPemda->no_perkada_bansos == NULL || $validasiPemda->tgl_perkada_bansos == NULL || $validasiPemda->link == NULL)
            <div class="callout callout-danger bg-danger m-4">
                <h4 class="mb-3"><i class="icon fa fa-exclamation-triangle"></i> Catatan Ketidaksesuaian</h4>
                @if ($validasiPemda->no_perda == NULL || $validasiPemda->tgl_perda == NULL)
                <p class="mb-1">Nomor dan/atau Tanggal Peraturan Daerah tentang APBD belum diisi.</p>
                @endif

                @if ($validasiPemda->a_belanja_daerah < 1 || $validasiPemda->r_belanja_daerah < 1)
                <p class="mb-1">Anggaran dan/atau Realisasi Belanja Daerah belum diisi.</p>
                @endif

                @if ($validasiPemda->a_5_1_06 < 1 || $validasiPemda->r_5_1_06 < 1)
                <p class="mb-1">Anggaran dan/atau Realisasi Belanja Bantuan Sosial belum diisi.</p>
                @endif

                @if ($validasiPemda->a_5_1_06 != $ujiAktBansos->where('kd_rek', 15)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 17)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 20)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 22)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 25)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 27)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 30)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 32)->sum('uji_anggaran') || $validasiPemda->r_5_1_06 != $ujiAktBansos->where('kd_rek', 15)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 17)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 20)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 22)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 25)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 27)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 30)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 32)->sum('uji_realisasi'))
                <p class="mb-1">Anggaran dan/atau Realisasi Belanja Bantuan Sosial belum sesuai dengan rincian aktivitas.</p>
                @endif

                @if ($validasiPemda->a_5_3 < 1 || $validasiPemda->r_5_3 < 1)
                <p class="mb-1">Anggaran dan/atau Realisasi Belanja Tidak Terduga (BTT) belum diisi.</p>
                @endif

                @if ($validasiPemda->no_perkada_bansos == NULL || $validasiPemda->tgl_perkada_bansos == NULL)
                <p class="mb-1">Nomor dan/atau tanggal Peraturan Kepala Daerah tentang Bantuan Sosial belum diisi.</p>
                @endif

                @if ($validasiPemda->link == NULL)
                <p class="mb-1">Softfile Peraturan Kepala Daerah tentang Bantuan Sosial belum diisi.</p>
                @endif
            </div>
            @endif
        </div>

        <div class="card p-3">
            <h6>Daftar Urusan/OPD</h6>
            <div class="card-body p-0 mt-2">
                @include('validasi_pemdas.table-rincian')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
