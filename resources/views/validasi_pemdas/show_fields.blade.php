<!-- Nm Pemda Field -->
<div class="form-group col-sm-3">
    <p>Nama Pemerintah Daerah</p>
</div>
<div class="form-group col-sm-9">
    <input class="form-control text-sm" type="text" value="{{ $validasiPemda->nm_pemda }}" disabled>
</div>

<!-- No Perda Field -->
<div class="form-group col-sm-3">
    <p>Peraturan Daerah APBD</p>
</div>
<div class="form-group col-sm-4">
    <input class="form-control text-sm" type="text" value="{{ $validasiPemda->no_perda }}" disabled>
</div>

<!-- Tgl Perda Field -->
<div class="form-group col-sm-1">
    <p>Tanggal</p>
</div>
<div class="form-group col-sm-4">
    <input class="form-control text-sm" type="text" value="@if ($validasiPemda->tgl_perda != NULL) @tanggal($validasiPemda->tgl_perda) @else NA @endif" disabled>
</div>

<div class="form-group col-sm-12">
    <h6>Informasi Belanja Daerah</h6>
</div>

<table class="table table-bordered text-center" id="validasiPemdas-table">
    <thead class="bg-secondary">
        <tr>
            <th>Uraian</th>
            <th>Baseline</th>
            <th>Anggaran</th>
            <th>Realisasi</th>
            <th>%</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-left">Total Anggaran Belanja Daerah</td>
            <td>@rupiah($validasiPemda->belanja_daerah)</td>
            <td>@rupiah($validasiPemda->a_belanja_daerah)</td>
            <td>@rupiah($validasiPemda->r_belanja_daerah)</td>
            <td>@if ($validasiPemda->a_belanja_daerah > 0) @persen($validasiPemda->r_belanja_daerah/$validasiPemda->a_belanja_daerah) @else 0,00 @endif</td>
        </tr>
        <tr>
            <td class="text-left">Anggaran Belanja Bansos 2023</td>
            <td>@rupiah($validasiPemda->{'5_1_06'})</td>
            <td>@rupiah($validasiPemda->a_5_1_06)</td>
            <td>@rupiah($validasiPemda->r_5_1_06)</td>
            <td>@if ($validasiPemda->a_5_1_06 > 0) @persen($validasiPemda->r_5_1_06/$validasiPemda->a_5_1_06) @else 0,00 @endif</td>
        </tr>
        <tr>
            <td class="text-left">Belanja Tidak Terduga (BTT)</td>
            <td>@rupiah($validasiPemda->{'5_3'})</td>
            <td>@rupiah($validasiPemda->a_5_3)</td>
            <td>@rupiah($validasiPemda->r_5_3)</td>
            <td>@if ($validasiPemda->a_5_3 > 0) @persen($validasiPemda->r_5_3/$validasiPemda->a_5_3) @else 0,00 @endif</td>
        </tr>
    </tbody>
</table>

<div class="form-group col-sm-12">
    <h6>Kebijakan Pelaksanaan Bansos</h6>
</div>

<!-- No Perkada Bansos Field -->
<div class="form-group col-sm-3">
    <p>Nomor Perkada Bansos</p>
</div>
<div class="form-group col-sm-4">
    <input class="form-control text-sm" type="text" value="{{ $validasiPemda->no_perkada_bansos }}" disabled>
</div>

<!-- Tgl Perkada Bansos Field -->
<div class="form-group col-sm-1">
    <p>Tanggal</p>
</div>
<div class="form-group col-sm-2">
    <input class="form-control text-sm" type="text" value="@if ($validasiPemda->tgl_perkada_bansos != NULL) @tanggal($validasiPemda->tgl_perkada_bansos) @else Belum Diisi @endif" disabled>
</div>

<div class="form-group col-sm-2">
    @if ($validasiPemda->link != NULL)
    <a class="btn btn-primary col-12" href="{{ $validasiPemda->link }}" target="_blank"><i class="fa fa-download"></i>  Download Lampiran</a>
    @else
    <a class="btn btn-danger col-12"><i class="fa fa-exclamation-triangle"></i>  Belum Upload</a>
    @endif
</div>