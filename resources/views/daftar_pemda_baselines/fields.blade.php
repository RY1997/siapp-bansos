<!-- Nm Pemda Field -->
<div class="form-group col-sm-3">
    <p>Nama Pemerintah Daerah</p>
</div>
<div class="form-group col-sm-9">
    <input class="form-control text-sm" type="text" value="{{ $daftarPemdaBaseline->nm_pemda }}" disabled>
</div>

<!-- No Perda Field -->
<div class="form-group col-sm-3">
    <p>Peraturan Daerah APBD</p>
</div>
<div class="form-group col-sm-4">
    <input class="form-control text-sm" type="text" value="{{ $daftarPemdaBaseline->no_perda }}" disabled>
</div>

<!-- Tgl Perda Field -->
<div class="form-group col-sm-1">
    <p>Tanggal</p>
</div>
<div class="form-group col-sm-4">
    <input class="form-control text-sm" type="text" value="{{ $daftarPemdaBaseline->tgl_perda }}" disabled>
</div>

<div class="form-group col-sm-12">
    <h6>Informasi Belanja Daerah</h6>
</div>

<!-- Belanja Daerah Field -->
<div class="form-group col-sm-3">
    <p>Total Anggaran Belanja Daerah</p>
</div>
<div class="form-group col-sm-9">
    <input class="form-control text-sm" type="text" value="{{ number_format($daftarPemdaBaseline->belanja_daerah,2,',','.') }}" disabled>
</div>

<!-- Nm Pemda Field -->
<div class="form-group col-sm-3">
    <p>Anggaran Belanja Bansos 2023</p>
</div>
<div class="form-group col-sm-9">
    <input class="form-control text-sm" type="text" value="{{ number_format($daftarPemdaBaseline->{'5_1_06'},2,',','.') }}" disabled>
</div>

<!-- Nm Pemda Field -->
<div class="form-group col-sm-3">
    <p>Belanja Tidak Terduga (BTT)</p>
</div>
<div class="form-group col-sm-9">
    <input class="form-control text-sm" type="text" value="{{ number_format($daftarPemdaBaseline->{'5_3'},2,',','.') }}" disabled>
</div>

<div class="form-group col-sm-12">
    <h6>Informasi yang perlu Diperoleh saat Monitoring</h6>
</div>

<!-- No Perkada Bansos Field -->
<div class="form-group col-sm-3">
    <p>Nomor Perkada Bansos</p>
</div>
<div class="form-group col-sm-4">
    {!! Form::text('no_perkada_bansos', null, ['class' => 'form-control text-sm','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Perkada Bansos Field -->
<div class="form-group col-sm-1">
    <p>Tanggal</p>
</div>
<div class="form-group col-sm-4">
    {!! Form::text('tgl_perkada_bansos', null, ['class' => 'form-control text-sm','id'=>'tgl_perkada_bansos']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_perkada_bansos').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush