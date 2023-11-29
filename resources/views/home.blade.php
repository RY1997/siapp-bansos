@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard Hasil Pengawasan
                    @if (Auth::user()->role == 'Admin')
                     Nasional
                    @elseif (Auth::user()->role == 'Perwakilan BPKP')
                     se-{{ Auth::user()->nm_pemda }}
                    @else
                     Pemerintah Daerah {{ Auth::user()->nm_pemda }}
                    @endif
                </h1>
            </div>
        </div>
    </div>
</section>

<div class="row content px-3">
    <div class="col-sm-4">
        <div class="small-box bg-danger">
            <div class="inner">
                <p class="mb-0">Realisasi Belanja Daerah</p>
                <h3>@rupiah($pemdaMonitoring->sum('r_belanja_daerah')/1000000000) M</h3>
                <p>dari anggaran @rupiah($pemdaMonitoring->sum('a_belanja_daerah')/1000000000) M</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-cart"></i>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="small-box bg-warning">
            <div class="inner">
                <p class="mb-0">Realisasi Belanja Bantuan Sosial</p>
                <h3>@rupiah($pemdaMonitoring->sum('r_5_1_06')/1000000000) M</h3>
                <p>dari anggaran @rupiah($pemdaMonitoring->sum('a_5_1_06')/1000000000) M</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="small-box bg-primary">
            <div class="inner">
                <p class="mb-0">Realisasi Belanja Tidak Terduga</p>
                <h3>@rupiah($pemdaMonitoring->sum('r_5_3')/1000000000) M</h3>
                <p>dari anggaran @rupiah($pemdaMonitoring->sum('a_5_3')/1000000000) M</p>
            </div>
            <div class="icon">
                <i class="fa fa-sitemap"></i>
            </div>
        </div>
    </div>

    <div class="col-sm-8">
        <div class="card p-4 text-center">
            <h5>Postur Realisasi Belanja Bantuan Sosial (dalam Persen)</h5>
            <canvas id="sebaranBansos" style="width:100%"></canvas>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card">
            <div class="card-body p-3 text-center text-xs">
                <h5>Sebaran Belanja Bansos</h5>
                <table class="table table-bordered">
                    <thead>
                    <tr class="bg-primary">
                        <th>Uraian</th>
                        <th>Jumlah</th>
                    </tr>
                    </thead>
                    <tbody class="text-left">
                        <tr>
                            <td>Realisasi Belanja Bansos direncanakan</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 17)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 20)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 22)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 25)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 27)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 30)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 32)->sum('uji_realisasi'))</td>
                        </tr>
                        <tr>
                            <td>Capaian realisasi belanja bansos yang direncanakan</td>
                            <td>
                            @if ($ujiMonitoring->where('kd_rek' , 15)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 20)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 25)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 30)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->sum('uji_anggaran') > 0)
                                @persen(($ujiMonitoring->where('kd_rek' , 15)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 17)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 20)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 22)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 25)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 27)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 30)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 32)->sum('uji_realisasi')) / ($ujiMonitoring->where('kd_rek' , 15)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 20)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 25)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 30)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->sum('uji_anggaran')) * 100)%
                            @else
                                0,00%
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Realisasi belanja bansos tidak direncanakan</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->sum('uji_realisasi'))</td>
                        </tr>
                        <tr>
                            <td>Persentase realisasi belanja bansos tidak direncanakan/anggaran BTT</td>
                            <td>
                            @if ($ujiMonitoring->where('kd_rek' , 33)->sum('uji_anggaran') > 0)
                                @persen($ujiMonitoring->where('kd_rek' , 33)->sum('uji_realisasi') / $ujiMonitoring->where('kd_rek' , 33)->sum('uji_anggaran') * 100)%
                            @else
                                0,00%
                            @endif
                            </td>
                        </tr>
                        <tr class="bg-secondary">
                            <td>Total Realisasi Belanja Bansos (direncanakan dan tidak direncanakan)</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 17)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 20)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 22)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 25)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 27)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 30)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 32)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 33)->sum('uji_realisasi'))</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body p-3 text-center text-xs">
                <h5>Burden Sharing Bantuan Sosial Daerah</h5>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="tab" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Total</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="tab" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Bansos Tunai</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="tab" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Bansos Barang</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">a</div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">b</div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">c</div>
                </div>
                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr class="bg-primary">
                            <th rowspan="2">Jenis Belanja</th>
                            <th colspan="2">Jumlah</th>
                            <th colspan="2">Program Keluarga Harapan</th>
                            <th colspan="2">Bantuan Pangan Non Tunai Sembako</th>
                            <th colspan="2">Program Indonesia Pintar</th>
                            <th colspan="2">Bantuan Stimulan Perumahan Swadaya</th>
                            <th colspan="2">Jaminan Kesehatan Nasional</th>
                            <th colspan="2">Bantuan Langsung Tunai UMKM</th>
                            <th colspan="2">Bansos Lainnya</th>
                        </tr>
                        <tr class="bg-primary">
                            <th>Anggaran</th>
                            <th>Realisasi</th>
                            <th>Anggaran</th>
                            <th>Realisasi</th>
                            <th>Anggaran</th>
                            <th>Realisasi</th>
                            <th>Anggaran</th>
                            <th>Realisasi</th>
                            <th>Anggaran</th>
                            <th>Realisasi</th>
                            <th>Anggaran</th>
                            <th>Realisasi</th>
                            <th>Anggaran</th>
                            <th>Realisasi</th>
                            <th>Anggaran</th>
                            <th>Realisasi</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        <tr class="bg-secondary">
                            <td colspan="17">Belanja Bantuan Sosial yang Direncanakan</td>
                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Individu</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 17)->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_realisasi'))</td>

                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Keluarga</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 22)->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_realisasi'))</td>

                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Kelompok Masyarakat</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 27)->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_realisasi'))</td>

                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Lembaga Non Pemerintahan</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 32)->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_realisasi'))</td>

                        </tr>

                        <tr class="bg-secondary">
                            <td colspan="17">Belanja Bantuan Sosial yang Tidak Direncanakan (BTT)</td>
                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Individu</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_realisasi'))</td>

                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Keluarga</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_realisasi'))</td>

                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Kelompok Masyarakat</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_realisasi'))</td>

                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Lembaga Non Pemerintahan</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Program Keluarga Harapan')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Bantuan Pangan Non Tunai Sembako')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Program Indonesia Pintar')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Bantuan Stimulan Perumahan Swadaya (BSPS)')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Jaminan Kesehatan Nasional')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Bantuan Langsung Tunai UMKM')->sum('uji_realisasi'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_anggaran'))</td>
                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_bansos_sejenis' , 'Bansos Lainnya')->sum('uji_realisasi'))</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body p-3 text-center text-xs">
                <h5>Basis Data Belanja Bansos Daerah (Anggaran)</h5>
                <table class="table table-bordered">
                    <thead>
                    <tr class="bg-primary">
                        <th>Jenis Belanja</th>
                        <th>DTKS</th>
                        <th>Basis Data P3KE</th>
                        <th>Basis Data Daerah</th>
                        <th>Hasil Pendataan Mandiri</th>
                        <th>Basis Data Lainnya</th>
                    </tr>
                    </thead>
                    <tbody class="text-left">
                        <tr class="bg-secondary">
                            <td colspan="6">Belanja Bantuan Sosial yang Direncanakan</td>
                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Individu</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_basis_salur' , 'DTKS')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_basis_salur' , 'DTKS')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_basis_salur' , 'Data Pensasaran Percepatan Penghapusan Kemiskinan Ekstrem (P3KE)')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_basis_salur' , 'Data Pensasaran Percepatan Penghapusan Kemiskinan Ekstrem (P3KE)')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_basis_salur' , 'Basis Data Daerah')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_basis_salur' , 'Basis Data Daerah')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_basis_salur' , 'Hasil Pendataan Mandiri')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_basis_salur' , 'Hasil Pendataan Mandiri')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 15)->where('uji_basis_salur' , 'Basis Data Lainnya')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->where('uji_basis_salur' , 'Basis Data Lainnya')->sum('uji_anggaran'))</td>
                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Keluarga</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_basis_salur' , 'DTKS')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_basis_salur' , 'DTKS')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_basis_salur' , 'Data Pensasaran Percepatan Penghapusan Kemiskinan Ekstrem (P3KE)')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_basis_salur' , 'Data Pensasaran Percepatan Penghapusan Kemiskinan Ekstrem (P3KE)')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_basis_salur' , 'Basis Data Daerah')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_basis_salur' , 'Basis Data Daerah')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_basis_salur' , 'Hasil Pendataan Mandiri')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_basis_salur' , 'Hasil Pendataan Mandiri')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 20)->where('uji_basis_salur' , 'Basis Data Lainnya')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->where('uji_basis_salur' , 'Basis Data Lainnya')->sum('uji_anggaran'))</td>
                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Kelompok Masyarakat</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_basis_salur' , 'DTKS')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_basis_salur' , 'DTKS')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_basis_salur' , 'Data Pensasaran Percepatan Penghapusan Kemiskinan Ekstrem (P3KE)')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_basis_salur' , 'Data Pensasaran Percepatan Penghapusan Kemiskinan Ekstrem (P3KE)')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_basis_salur' , 'Basis Data Daerah')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_basis_salur' , 'Basis Data Daerah')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_basis_salur' , 'Hasil Pendataan Mandiri')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_basis_salur' , 'Hasil Pendataan Mandiri')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 25)->where('uji_basis_salur' , 'Basis Data Lainnya')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->where('uji_basis_salur' , 'Basis Data Lainnya')->sum('uji_anggaran'))</td>
                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Lembaga Non Pemerintahan</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_basis_salur' , 'DTKS')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_basis_salur' , 'DTKS')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_basis_salur' , 'Data Pensasaran Percepatan Penghapusan Kemiskinan Ekstrem (P3KE)')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_basis_salur' , 'Data Pensasaran Percepatan Penghapusan Kemiskinan Ekstrem (P3KE)')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_basis_salur' , 'Basis Data Daerah')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_basis_salur' , 'Basis Data Daerah')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_basis_salur' , 'Hasil Pendataan Mandiri')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_basis_salur' , 'Hasil Pendataan Mandiri')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 30)->where('uji_basis_salur' , 'Basis Data Lainnya')->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->where('uji_basis_salur' , 'Basis Data Lainnya')->sum('uji_anggaran'))</td>
                        </tr>
                        <tr class="bg-secondary">
                            <td colspan="6">Belanja Bantuan Sosial yang Tidak Direncanakan (BTT)</td>
                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Individu</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_basis_salur' , 'DTKS')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_basis_salur' , 'Data Pensasaran Percepatan Penghapusan Kemiskinan Ekstrem (P3KE)')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_basis_salur' , 'Basis Data Daerah')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_basis_salur' , 'Hasil Pendataan Mandiri')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Orang')->where('uji_basis_salur' , 'Basis Data Lainnya')->sum('uji_anggaran'))</td>
                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Keluarga</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_basis_salur' , 'DTKS')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_basis_salur' , 'Data Pensasaran Percepatan Penghapusan Kemiskinan Ekstrem (P3KE)')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_basis_salur' , 'Basis Data Daerah')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_basis_salur' , 'Hasil Pendataan Mandiri')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Keluarga')->where('uji_basis_salur' , 'Basis Data Lainnya')->sum('uji_anggaran'))</td>
                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Kelompok Masyarakat</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_basis_salur' , 'DTKS')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_basis_salur' , 'Data Pensasaran Percepatan Penghapusan Kemiskinan Ekstrem (P3KE)')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_basis_salur' , 'Basis Data Daerah')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_basis_salur' , 'Hasil Pendataan Mandiri')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Kelompok Masyarakat')->where('uji_basis_salur' , 'Basis Data Lainnya')->sum('uji_anggaran'))</td>
                        </tr>
                        <tr>
                            <td>Belanja Bantuan Sosial kepada Lembaga Non Pemerintahan</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_basis_salur' , 'DTKS')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_basis_salur' , 'Data Pensasaran Percepatan Penghapusan Kemiskinan Ekstrem (P3KE)')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_basis_salur' , 'Basis Data Daerah')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_basis_salur' , 'Hasil Pendataan Mandiri')->sum('uji_anggaran'))</td>

                            <td>@rupiah($ujiMonitoring->where('kd_rek' , 33)->where('satuan_kpm' , 'Lembaga Non Pemerintahan')->where('uji_basis_salur' , 'Basis Data Lainnya')->sum('uji_anggaran'))</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
</div>

@endsection

@push('page_scripts')
<script>
var xValues = ["Bansos kepada Individu", "Bansos kepada Keluarga", "Bansos kepada Kelompok Masyarakat", "Bansos kepada Lembaga Non Pemerintahan", "Bansos BTT"];
var yValues = [
    {{ $ujiMonitoring->where('kd_rek' , 15)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->sum('uji_anggaran') == 0 ? 0 : (($ujiMonitoring->where('kd_rek' , 15)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 17)->sum('uji_realisasi')) / ($ujiMonitoring->where('kd_rek' , 15)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 17)->sum('uji_anggaran')) * 100) }},
    {{ $ujiMonitoring->where('kd_rek' , 20)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->sum('uji_anggaran') == 0 ? 0 : (($ujiMonitoring->where('kd_rek' , 20)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 22)->sum('uji_realisasi')) / ($ujiMonitoring->where('kd_rek' , 20)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 22)->sum('uji_anggaran')) * 100) }},
    {{ $ujiMonitoring->where('kd_rek' , 25)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->sum('uji_anggaran') == 0 ? 0 : (($ujiMonitoring->where('kd_rek' , 25)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 27)->sum('uji_realisasi')) / ($ujiMonitoring->where('kd_rek' , 25)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 27)->sum('uji_anggaran')) * 100) }},
    {{ $ujiMonitoring->where('kd_rek' , 30)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->sum('uji_anggaran') == 0 ? 0 : (($ujiMonitoring->where('kd_rek' , 30)->sum('uji_realisasi') + $ujiMonitoring->where('kd_rek' , 32)->sum('uji_realisasi')) / ($ujiMonitoring->where('kd_rek' , 30)->sum('uji_anggaran') + $ujiMonitoring->where('kd_rek' , 32)->sum('uji_anggaran')) * 100) }},
    {{ $ujiMonitoring->where('kd_rek' , 33)->sum('uji_anggaran') == 0 ? 0 : ($ujiMonitoring->where('kd_rek' , 33)->sum('uji_realisasi') / $ujiMonitoring->where('kd_rek' , 33)->sum('uji_anggaran') * 100) }}];
var barColors = ["red", "green","blue","orange","gray"];

new Chart("sebaranBansos", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        legend: {display: false},
        scales: {
            yAxes : [{
                ticks : {
                    max : 100,
                    min : 0
                }
            }]
        }
    }
});
</script>
@endpush