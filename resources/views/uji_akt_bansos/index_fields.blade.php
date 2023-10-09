<!-- Nm Pemda Field -->
<div class="form-group col-sm-3">
    <p>Nama Pemerintah Daerah</p>
</div>
<div class="form-group col-sm-9">
    <input class="form-control text-sm" type="text" value="{{ $daftarPemdaBaseline->nm_pemda }}" disabled>
</div>

<!-- Urusan Field -->
<div class="form-group col-sm-3">
    <p>Nama Urusan</p>
</div>
<div class="form-group col-sm-9">
    <input class="form-control text-sm" type="text" value="{{ $daftarOpd->urusan }}" disabled>
</div>

<!-- Kd Opd Field -->
<div class="form-group col-sm-3">
    <p>Nama OPD</p>
</div>
<div class="form-group col-sm-2">
    <input class="form-control text-sm" type="text" value="{{ $daftarOpd->kd_opd }}" disabled>
</div>
<div class="form-group col-sm-7">
    <input class="form-control text-sm" type="text" value="{{ $daftarOpd->opd }}" disabled>
</div>