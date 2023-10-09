<!-- Kd Pemda Field -->
<div class="form-group col-sm-3">
    <p>Nama Pemda</p>
</div>
<div class="form-group col-sm-9">
    <input class="form-control text-sm" type="text" value="{{ $daftarPemdaBaseline->nm_pemda }}" readonly>
    <input class="form-control text-sm" type="text" id="kd_pemda" name="kd_pemda" value="{{ $daftarPemdaBaseline->id }}" hidden>
</div>

<!-- Nama OPD Opd Field -->
<div class="form-group col-sm-3">
    <p>Nama Urusan</p>
</div>
<div class="form-group col-sm-9">
    <input class="form-control text-sm" type="text" value="{{ $daftarOpd->urusan }}" readonly>
</div>
<div class="form-group col-sm-3">
    <p>Nama OPD</p>
</div>
<div class="form-group col-sm-2">
    <input class="form-control text-sm" type="text" value="{{ $daftarOpd->kd_opd }}" readonly>
</div>
<div class="form-group col-sm-7">
    <input class="form-control text-sm" type="text" id="kd_opd" name="kd_opd" value="{{ $daftarOpd->id }}" hidden>
    <input class="form-control text-sm" type="text" id="nm_opd" name="nm_opd" value="{{ $daftarOpd->opd }}" readonly>
</div>

<!-- Kd Rek Field -->
<div class="form-group col-sm-3">
    <p>Kode Rekening</p>
</div>
<div class="form-group col-sm-2">
    <input class="form-control text-sm" type="text" value="{{ $dataRekening->kd_rek }}" readonly>
</div>
<div class="form-group col-sm-7">
    <input class="form-control text-sm" type="text" value="{{ $dataRekening->jenis }}" readonly>
    <input class="form-control text-sm" id="kd_rek" name="kd_rek" type="text" value="{{ $dataRekening->id }}" hidden>
</div>

<div class="form-group col-sm-12">
    <h6>Rincian Aktivitas</h6>
</div>
<!-- Uji Nm Aktivitas Field -->
<div class="form-group col-sm-3">
    <p>Uraian Aktivitas</p>
</div>
<div class="form-group col-sm-9">
    <textarea class="form-control text-sm" name="uji_nm_aktivitas" rows="3" id="uji_nm_aktivitas">{{ $ujiAktBansos->uji_nm_aktivitas }}</textarea>
</div>

<!-- Uji Anggaran Field -->
<div class="form-group col-sm-3">
    <p>Anggaran dan Realisasi</p>
</div>
<div class="form-group col-sm-3">
    <input class="form-control text-sm" name="uji_anggaran" type="number" value="{{ $ujiAktBansos->uji_anggaran }}">
</div>

<!-- Uji Realisasi Field -->
<div class="form-group col-sm-2">
    <p>Realisasi</p>
</div>
<div class="form-group col-sm-4">
    <input class="form-control text-sm" name="uji_realisasi" type="number" value="{{ $ujiAktBansos->uji_realisasi }}">
</div>

<!-- Uji Bansos Sejenis Field -->
<div class="form-group col-sm-3">
    <p>Bansos Pusat yang Sejenis</p>
</div>
<div class="form-group col-sm-3">
    <select class="form-control text-sm custom-select" id="uji_bansos_sejenis" name="uji_bansos_sejenis">
        <option selected disabled>Pilih</option>
        <option value="PKH" {{ $ujiAktBansos->uji_bansos_sejenis == 'PKH' ? 'selected' : '' }}>PKH</option>
        <option value="BNPT" {{ $ujiAktBansos->uji_bansos_sejenis == 'BNPT' ? 'selected' : '' }}>BNPT</option>
        <option value="KIP" {{ $ujiAktBansos->uji_bansos_sejenis == 'KIP' ? 'selected' : '' }}>KIP</option>
        <option value="BSPS (Rumah)" {{ $ujiAktBansos->uji_bansos_sejenis == 'BSPS (Rumah)' ? 'selected' : '' }}>BSPS (Rumah)</option>
    </select>
</div>

<!-- Uji Kpm Field -->
<div class="form-group col-sm-2">
    <p>Jumlah KPM</p>
</div>
<div class="form-group col-sm-2">
    <input class="form-control text-sm" name="uji_kpm" type="number" value="{{ $ujiAktBansos->uji_kpm }}">
</div>

<!-- Satuan KPM Field -->
<div class="form-group col-sm-2">
    <select class="form-control text-sm custom-select" id="satuan_kpm" name="satuan_kpm">
        <option selected disabled>Pilih</option>
        <option value="Orang" {{ $ujiAktBansos->satuan_kpm == 'Orang' ? 'selected' : '' }}>Orang</option>
        <option value="Keluarga" {{ $ujiAktBansos->satuan_kpm == 'Keluarga' ? 'selected' : '' }}>Keluarga</option>
        <option value="Lembaga" {{ $ujiAktBansos->satuan_kpm == 'Lembaga' ? 'selected' : '' }}>Lembaga</option>
    </select>
</div>

<!-- Uji Juknis Field -->
<div class="form-group col-sm-3">
    <p>Keberadaan Juknis</p>
</div>
<div class="form-group col-sm-3">
    <select class="form-control text-sm custom-select" id="uji_juknis" name="uji_juknis">
        <option selected disabled>Pilih</option>
        <option value="Ada" {{ $ujiAktBansos->uji_juknis == 'Ada' ? 'selected' : '' }}>Ada</option>
        <option value="Tidak Ada" {{ $ujiAktBansos->uji_juknis == 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada</option>
    </select>
</div>
<div class="form-group col-sm-2">
    <p>Bentuk Juknis</p>
</div>
<div class="form-group col-sm-4">
    <input class="form-control text-sm" id="bentuk_juknis" name="bentuk_juknis" type="text" value="{{ $ujiAktBansos->bentuk_juknis }}">
</div>

<!-- Uji Basis Salur Field -->
<div class="form-group col-sm-3">
    <p>Basis Data Penyaluran</p>
</div>
<div class="form-group col-sm-9">
    <input class="form-control text-sm" id="uji_basis_salur" name="uji_basis_salur" type="text" value="{{ $ujiAktBansos->uji_basis_salur }}">
</div>

<!-- Uji Monev Field -->
<div class="form-group col-sm-3">
    <p>Monitoring dan Evaluasi atas Pelaksanaan Bansos</p>
</div>
<div class="form-group col-sm-3">
    <select class="form-control text-sm custom-select" id="uji_monev" name="uji_monev">
        <option selected disabled>Pilih</option>
        <option value="Ada" {{ $ujiAktBansos->uji_monev == 'Ada' ? 'selected' : '' }}>Ada</option>
        <option value="Tidak" {{ $ujiAktBansos->uji_monev == 'Tidak' ? 'selected' : '' }}>Tidak</option>
    </select>
</div>