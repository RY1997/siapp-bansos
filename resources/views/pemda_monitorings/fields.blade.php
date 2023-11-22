<!-- Nm Pemda Field -->
<div class="form-group col-sm-3">
    <p>Nama Pemerintah Daerah</p>
</div>
<div class="form-group col-sm-9">
    {!! Form::text('nm_pemda', null, ['class' => 'form-control text-sm','maxlength' => 255,'maxlength' => 255, 'readonly']) !!}
</div>

<!-- No Perda Field -->
<div class="form-group col-sm-3">
    <p>Peraturan Daerah APBD</p>
</div>
<div class="form-group col-sm-4">
    {!! Form::text('no_perda', null, ['class' => 'form-control text-sm','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Perda Field -->
<div class="form-group col-sm-1">
    <p>Tanggal</p>
</div>
<div class="form-group col-sm-4">
    {!! Form::text('tgl_perda', null, ['class' => 'form-control text-sm','id'=>'tgl_perda']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_perda').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<div class="form-group col-sm-12">
    <h6>Informasi Belanja Daerah</h6>
</div>

<table class="table table-bordered text-center" id="pemdaMonitorings-table">
    <thead class="bg-secondary">
        <tr>
            <th>Uraian</th>
            <th>APBD Induk</th>
            <th>APBD-P</th>
            <th>Realisasi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-left">Total Anggaran Belanja Daerah</td>
            <td>@rupiah($pemdaMonitoring->belanja_daerah)</td>
            <td>{!! Form::number('a_belanja_daerah', null, ['class' => 'form-control text-sm']) !!}</td>
            <td>{!! Form::number('r_belanja_daerah', null, ['class' => 'form-control text-sm']) !!}</td>
        </tr>
        <tr>
            <td class="text-left">Anggaran Belanja Bansos 2023</td>
            <td>@rupiah($pemdaMonitoring->{'5_1_06'})</td>
            <td>{!! Form::number('a_5_1_06', null, ['class' => 'form-control text-sm']) !!}</td>
            <td>{!! Form::number('r_5_1_06', null, ['class' => 'form-control text-sm']) !!}</td>
        </tr>
        <tr>
            <td class="text-left">Belanja Tidak Terduga (BTT)</td>
            <td>@rupiah($pemdaMonitoring->{'5_3'})</td>
            <td>{!! Form::number('a_5_3', null, ['class' => 'form-control text-sm']) !!}</td>
            <td>{!! Form::number('r_5_3', null, ['class' => 'form-control text-sm']) !!}</td>
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
    {!! Form::text('no_perkada_bansos', null, ['class' => 'form-control text-sm','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Perkada Bansos Field -->
<div class="form-group col-sm-1">
    <p>Tanggal</p>
</div>
<div class="form-group col-sm-1">
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

<div class="form-group col-sm-1">
    <p>Link</p>
</div>

<div class="form-group col-sm-2">
    {!! Form::text('link', null, ['class' => 'form-control text-sm']) !!}
</div>

@if (Auth()->user()->role != 'Pemerintah Daerah')
<div class="form-group col-sm-3">
    <p>Finalkan Hasil Pengawasan?</p>
</div>
<div class="form-group col-sm-4">
    {!! Form::select('status', ['Draft' => 'Draft', 'Final' => 'Final'], null, ['class' => 'form-control text-sm custom-select']) !!}
</div>
<div class="form-group col-sm-5">
    <p class="text-danger">Perhatian!<br>Setelah Hasil Pengawasan difinalkan, data tidak dapat diubah kembali.</p>
</div>
<div class="form-group col-sm-3">
    <p>Status Uji Petik</p>
</div>
<div class="form-group col-sm-4">
    {!! Form::select('uji_petik', ['Tidak' => 'Tidak', 'Ya' => 'Ya'], null, ['class' => 'form-control text-sm custom-select']) !!}
</div>
@endif