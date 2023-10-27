<!-- Kd Pemda Field -->
<div class="form-group col-sm-3">
    <p>Nama Pemda</p>
</div>
<div class="form-group col-sm-9">
    <input class="form-control text-sm" type="text" value="{{ $pemdaMonitoring->nm_pemda }}" readonly>
    <input class="form-control text-sm" type="text" id="kd_pemda" name="kd_pemda" value="{{ $pemdaMonitoring->id }}" hidden>
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
    {!! Form::textarea('uji_nm_aktivitas', null, ['class' => 'form-control text-sm']) !!}
</div>

<!-- Uji Anggaran Field -->
<div class="form-group col-sm-3">
    <p>Anggaran dan Realisasi</p>
</div>
<div class="form-group col-sm-3">
    {!! Form::number('uji_anggaran', null, ['class' => 'form-control text-sm']) !!}
</div>

<!-- Uji Realisasi Field -->
<div class="form-group col-sm-2">
    <p>Realisasi</p>
</div>
<div class="form-group col-sm-4">
    {!! Form::number('uji_realisasi', null, ['class' => 'form-control text-sm']) !!}
</div>

<!-- Jenis Bansos Field -->
<div class="form-group col-sm-3">
    <p>Jenis Bansos</p>
</div>
<div class="form-group col-sm-9">
    @if ($dataRekening->id == 15 || $dataRekening->id == 20 || $dataRekening->id == 25 || $dataRekening->id == 30)
    <select class="form-control text-sm custom-select" id="jenis_bansos" name="jenis_bansos" readonly>
        <option value="Uang" selected>Uang</option>
    </select>
    @elseif ($dataRekening->id == 17 || $dataRekening->id == 22 || $dataRekening->id == 27 || $dataRekening->id == 32)
    <select class="form-control text-sm custom-select" id="jenis_bansos" name="jenis_bansos" readonly>
        <option value="Barang" selected>Barang</option>
    </select>
    @else
    {!! Form::select('jenis_bansos', ['' => 'Pilih', 'Uang' => 'Uang', 'Barang' => 'Barang'], null, ['class' => 'form-control text-sm custom-select']) !!}
    @endif
</div>

<!-- Uji Bansos Sejenis Field -->
<div class="form-group col-sm-3">
    <p>Bansos Pusat yang Sejenis</p>
</div>
@if ($dataRekening->obyek != 'Belanja Jasa')
<div class="form-group col-sm-3">
    {!! Form::select('uji_bansos_sejenis', ['' => 'Pilih', 'Program Keluarga Harapan' => 'Program Keluarga Harapan', 'Bantuan Pangan Non Tunai Sembako' => 'Bantuan Pangan Non Tunai Sembako', 'Program Indonesia Pintar' => 'Program Indonesia Pintar', 'Bantuan Stimulan Perumahan Swadaya (BSPS)' => 'Bantuan Stimulan Perumahan Swadaya (BSPS)', 'Jaminan Kesehatan Nasional' => 'Jaminan Kesehatan Nasional', 'Bantuan Langsung Tunai UMKM' => 'Bantuan Langsung Tunai UMKM', 'Bansos Lainnya' => 'Bansos Lainnya'], null, ['class' => 'form-control text-sm custom-select']) !!}
</div>

<div class="form-group col-sm-2">
    <p>Keterangan Bansos Sejenis</p>
</div>
<div class="form-group col-sm-4">
    {!! Form::text('nm_bansos_sejenis', null, ['class' => 'form-control text-sm']) !!}
</div>
@else
<div class="form-group col-sm-3">
    <select class="form-control text-sm custom-select" id="uji_bansos_sejenis" name="uji_bansos_sejenis" disabled>
        <option value="Jaminan Kesehatan Nasional" selected>Jaminan Kesehatan Nasional</option>
    </select>
</div>
<div class="form-group col-sm-6">
</div>
@endif

<!-- Uji Kpm Field -->
<div class="form-group col-sm-3">
    <p>Jumlah Penerima Manfaat</p>
</div>
<div class="form-group col-sm-3">
    {!! Form::number('uji_kpm', null, ['class' => 'form-control text-sm']) !!}
</div>

<!-- Satuan KPM Field -->
<div class="form-group col-sm-2">
    <p>Satuan Penerima Manfaat</p>
</div>
<div class="form-group col-sm-4">
    {!! Form::select('satuan_kpm', ['' => 'Pilih', 'Orang' => 'Orang', 'Keluarga' => 'Keluarga', 'Kelompok Masyarakat' => 'Kelompok Masyarakat', 'Lembaga Non Pemerintahan' => 'Lembaga Non Pemerintahan'], null, ['class' => 'form-control text-sm custom-select']) !!}
</div>

<!-- Uji Juknis Field -->
<div class="form-group col-sm-3">
    <p>Bentuk Juknis yang Ada</p>
</div>
<div class="form-group col-sm-3">
    {!! Form::select('uji_juknis', ['' => 'Pilih', 'Tidak Ada Juknis' => 'Tidak Ada Juknis', 'Peraturan Kepala Daerah' => 'Peraturan Kepala Daerah', 'Peraturan Kepala OPD' => 'Peraturan Kepala OPD', 'Lainnya' => 'Lainnya'], null, ['class' => 'form-control text-sm custom-select']) !!}
</div>
<div class="form-group col-sm-2">
    <p>Keterangan Juknis</p>
</div>
<div class="form-group col-sm-4">
    {!! Form::text('nm_juknis', null, ['class' => 'form-control text-sm']) !!}
</div>

<!-- Uji Basis Salur Field -->
<div class="form-group col-sm-3">
    <p>Basis Data Penyaluran</p>
</div>
<div class="form-group col-sm-3">
    {!! Form::select('uji_basis_salur', ['' => 'Pilih', 'DTKS' => 'DTKS', 'Basis Data Daerah' => 'Basis Data Daerah', 'Hasil Pendataan Mandiri' => 'Hasil Pendataan Mandiri', 'Basis Data Lainnya' => 'Basis Data Lainnya'], null, ['class' => 'form-control text-sm custom-select']) !!}
</div>
<div class="form-group col-sm-2">
    <p>Keterangan Basis Salur</p>
</div>
<div class="form-group col-sm-4">
    {!! Form::text('nm_basis_salur', null, ['class' => 'form-control text-sm']) !!}
</div>

<!-- Uji Monev Field -->
<div class="form-group col-sm-3">
    <p>Monitoring dan Evaluasi atas Pelaksanaan Bansos</p>
</div>
<div class="form-group col-sm-9">
    {!! Form::select('uji_monev', ['' => 'Pilih', 'Ada' => 'Ada', 'Tidak Ada' => 'Tidak Ada'], null, ['class' => 'form-control text-sm custom-select']) !!}
</div>