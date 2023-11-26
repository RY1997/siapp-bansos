<!-- Nm Pemda Field -->
<div class="form-group col-sm-3">
    <p>Nama Pemerintah Daerah</p>
</div>
<div class="form-group col-sm-9">
    <input class="form-control text-sm" type="text" value="{{ $pemdaMonitoring->nm_pemda }}" disabled>
</div>

<!-- No Perda Field -->
<div class="form-group col-sm-3">
    <p>Peraturan Daerah APBD</p>
</div>
<div class="form-group col-sm-4">
    <input class="form-control text-sm" type="text" value="{{ $pemdaMonitoring->no_perda }}" disabled>
</div>

<!-- Tgl Perda Field -->
<div class="form-group col-sm-1">
    <p>Tanggal</p>
</div>
<div class="form-group col-sm-4">
    <input class="form-control text-sm" type="text" value="@if ($pemdaMonitoring->tgl_perda != NULL) @tanggal($pemdaMonitoring->tgl_perda) @else NA @endif" disabled>
</div>

<div class="form-group col-sm-12 mb">
    <h6>A. Postur APBD</h6>
</div>

<table class="table table-bordered text-center" id="pemdaMonitorings-table">
    <thead class="bg-secondary">
        <tr>
            <th>Uraian</th>
            <th>APBD Induk</th>
            <th>APBD-P</th>
            <th>Realisasi</th>
            <th>%</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-left">Total Anggaran Belanja Daerah</td>
            <td>@rupiah($pemdaMonitoring->belanja_daerah)</td>
            <td>@rupiah($pemdaMonitoring->a_belanja_daerah)</td>
            <td>@rupiah($pemdaMonitoring->r_belanja_daerah)</td>
            <td>@if ($pemdaMonitoring->a_belanja_daerah > 0) @persen($pemdaMonitoring->r_belanja_daerah/$pemdaMonitoring->a_belanja_daerah * 100) @else 0,00 @endif</td>
        </tr>
        <tr>
            <td class="text-left">Anggaran Belanja Bansos 2023</td>
            <td>@rupiah($pemdaMonitoring->{'5_1_06'})</td>
            <td>@rupiah($pemdaMonitoring->a_5_1_06)</td>
            <td>@rupiah($pemdaMonitoring->r_5_1_06)</td>
            <td>@if ($pemdaMonitoring->a_5_1_06 > 0) @persen($pemdaMonitoring->r_5_1_06/$pemdaMonitoring->a_5_1_06 * 100) @else 0,00 @endif</td>
        </tr>
        <tr>
            <td class="text-left">Belanja Tidak Terduga (BTT)</td>
            <td>@rupiah($pemdaMonitoring->{'5_3'})</td>
            <td>@rupiah($pemdaMonitoring->a_5_3)</td>
            <td>@rupiah($pemdaMonitoring->r_5_3)</td>
            <td>@if ($pemdaMonitoring->a_5_3 > 0) @persen($pemdaMonitoring->r_5_3/$pemdaMonitoring->a_5_3 * 100) @else 0,00 @endif</td>
        </tr>
        <tr>
            <td class="text-left">Belanja Barang untuk Dijual/Diserahkan kepada Masyarakat</td>
            <td>@rupiah($pemdaMonitoring->{'5_1_02_01_01_0039'})</td>
            <td>@rupiah($pemdaMonitoring->a_5_1_02_01_01_0039)</td>
            <td>@rupiah($pemdaMonitoring->r_5_1_02_01_01_0039)</td>
            <td>@if ($pemdaMonitoring->a_5_1_02_01_01_0039 > 0) @persen($pemdaMonitoring->r_5_1_02_01_01_0039/$pemdaMonitoring->a_5_1_02_01_01_0039 * 100) @else 0,00 @endif</td>
        </tr>
    </tbody>
</table>

<div class="form-group col-sm-12">
    <h6>B. Kebijakan Pelaksanaan Bansos</h6>
</div>

<!-- No Perkada Bansos Field -->
<div class="form-group col-sm-3">
    <p>Nomor Perkada Bansos</p>
</div>
<div class="form-group col-sm-4">
    <input class="form-control text-sm" type="text" value="{{ $pemdaMonitoring->no_perkada_bansos }}" disabled>
</div>

<!-- Tgl Perkada Bansos Field -->
<div class="form-group col-sm-1">
    <p>Tanggal</p>
</div>
<div class="form-group col-sm-2">
    <input class="form-control text-sm" type="text" value="@if ($pemdaMonitoring->tgl_perkada_bansos != NULL) @tanggal($pemdaMonitoring->tgl_perkada_bansos) @else Belum Diisi @endif" disabled>
</div>

<div class="form-group col-sm-2">
    @if ($pemdaMonitoring->link != NULL)
    <a class="btn btn-primary col-12" href="{{ $pemdaMonitoring->link }}" target="_blank"><i class="fa fa-download"></i>  Download Lampiran</a>
    @else
    <a class="btn btn-danger col-12"><i class="fa fa-exclamation-triangle"></i>  Belum Upload</a>
    @endif
</div>