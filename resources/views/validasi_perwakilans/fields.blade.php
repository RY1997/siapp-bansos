<!-- Kd Pwk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kd_pwk', 'Kd Pwk:') !!}
    {!! Form::text('kd_pwk', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nm Pemda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nm_pemda', 'Nm Pemda:') !!}
    {!! Form::text('nm_pemda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- No Perda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_perda', 'No Perda:') !!}
    {!! Form::text('no_perda', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Perda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_perda', 'Tgl Perda:') !!}
    {!! Form::text('tgl_perda', null, ['class' => 'form-control','id'=>'tgl_perda']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_perda').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- No Perkada Bansos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_perkada_bansos', 'No Perkada Bansos:') !!}
    {!! Form::text('no_perkada_bansos', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tgl Perkada Bansos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_perkada_bansos', 'Tgl Perkada Bansos:') !!}
    {!! Form::text('tgl_perkada_bansos', null, ['class' => 'form-control','id'=>'tgl_perkada_bansos']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#tgl_perkada_bansos').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Link Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::textarea('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Belanja Daerah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('belanja_daerah', 'Belanja Daerah:') !!}
    {!! Form::number('belanja_daerah', null, ['class' => 'form-control']) !!}
</div>

<!-- A Belanja Daerah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('a_belanja_daerah', 'A Belanja Daerah:') !!}
    {!! Form::number('a_belanja_daerah', null, ['class' => 'form-control']) !!}
</div>

<!-- R Belanja Daerah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('r_belanja_daerah', 'R Belanja Daerah:') !!}
    {!! Form::number('r_belanja_daerah', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 02 01 01 0039 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_02_01_01_0039', '5 1 02 01 01 0039:') !!}
    {!! Form::number('5_1_02_01_01_0039', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 02 02 02 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_02_02_02', '5 1 02 02 02:') !!}
    {!! Form::number('5_1_02_02_02', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 02 02 02 0001 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_02_02_02_0001', '5 1 02 02 02 0001:') !!}
    {!! Form::number('5_1_02_02_02_0001', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 02 02 02 0002 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_02_02_02_0002', '5 1 02 02 02 0002:') !!}
    {!! Form::number('5_1_02_02_02_0002', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 02 02 02 0003 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_02_02_02_0003', '5 1 02 02 02 0003:') !!}
    {!! Form::number('5_1_02_02_02_0003', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 02 02 02 0004 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_02_02_02_0004', '5 1 02 02 02 0004:') !!}
    {!! Form::number('5_1_02_02_02_0004', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 02 02 02 0005 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_02_02_02_0005', '5 1 02 02 02 0005:') !!}
    {!! Form::number('5_1_02_02_02_0005', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 02 02 02 0006 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_02_02_02_0006', '5 1 02 02 02 0006:') !!}
    {!! Form::number('5_1_02_02_02_0006', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 02 02 02 0007 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_02_02_02_0007', '5 1 02 02 02 0007:') !!}
    {!! Form::number('5_1_02_02_02_0007', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 02 02 02 0008 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_02_02_02_0008', '5 1 02 02 02 0008:') !!}
    {!! Form::number('5_1_02_02_02_0008', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 02 02 02 0009 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_02_02_02_0009', '5 1 02 02 02 0009:') !!}
    {!! Form::number('5_1_02_02_02_0009', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_3', '5 3:') !!}
    {!! Form::number('5_3', null, ['class' => 'form-control']) !!}
</div>

<!-- A 5 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('a_5_3', 'A 5 3:') !!}
    {!! Form::number('a_5_3', null, ['class' => 'form-control']) !!}
</div>

<!-- R 5 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('r_5_3', 'R 5 3:') !!}
    {!! Form::number('r_5_3', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06', '5 1 06:') !!}
    {!! Form::number('5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- A 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('a_5_1_06', 'A 5 1 06:') !!}
    {!! Form::number('a_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- R 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('r_5_1_06', 'R 5 1 06:') !!}
    {!! Form::number('r_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_01', '5 1 06 01:') !!}
    {!! Form::number('5_1_06_01', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 01 01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_01_01', '5 1 06 01 01:') !!}
    {!! Form::number('5_1_06_01_01', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 01 01 0001 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_01_01_0001', '5 1 06 01 01 0001:') !!}
    {!! Form::number('5_1_06_01_01_0001', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 01 02 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_01_02', '5 1 06 01 02:') !!}
    {!! Form::number('5_1_06_01_02', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 01 02 0001 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_01_02_0001', '5 1 06 01 02 0001:') !!}
    {!! Form::number('5_1_06_01_02_0001', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 02 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_02', '5 1 06 02:') !!}
    {!! Form::number('5_1_06_02', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 02 01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_02_01', '5 1 06 02 01:') !!}
    {!! Form::number('5_1_06_02_01', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 02 01 0001 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_02_01_0001', '5 1 06 02 01 0001:') !!}
    {!! Form::number('5_1_06_02_01_0001', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 02 02 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_02_02', '5 1 06 02 02:') !!}
    {!! Form::number('5_1_06_02_02', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 02 02 0001 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_02_02_0001', '5 1 06 02 02 0001:') !!}
    {!! Form::number('5_1_06_02_02_0001', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 03 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_03', '5 1 06 03:') !!}
    {!! Form::number('5_1_06_03', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 03 01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_03_01', '5 1 06 03 01:') !!}
    {!! Form::number('5_1_06_03_01', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 03 01 0001 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_03_01_0001', '5 1 06 03 01 0001:') !!}
    {!! Form::number('5_1_06_03_01_0001', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 03 02 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_03_02', '5 1 06 03 02:') !!}
    {!! Form::number('5_1_06_03_02', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 03 02 0001 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_03_02_0001', '5 1 06 03 02 0001:') !!}
    {!! Form::number('5_1_06_03_02_0001', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 04 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_04', '5 1 06 04:') !!}
    {!! Form::number('5_1_06_04', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 04 01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_04_01', '5 1 06 04 01:') !!}
    {!! Form::number('5_1_06_04_01', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 04 01 0001 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_04_01_0001', '5 1 06 04 01 0001:') !!}
    {!! Form::number('5_1_06_04_01_0001', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 04 02 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_04_02', '5 1 06 04 02:') !!}
    {!! Form::number('5_1_06_04_02', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 04 02 0001 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_04_02_0001', '5 1 06 04 02 0001:') !!}
    {!! Form::number('5_1_06_04_02_0001', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 1 06 Urusan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_1_06_urusan', '5 1 06 Urusan:') !!}
    {!! Form::number('5_1_06_urusan', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1', '1:') !!}
    {!! Form::number('1', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1_01', '1 01:') !!}
    {!! Form::number('1_01', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 01 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1_01_5_1_06', '1 01 5 1 06:') !!}
    {!! Form::number('1_01_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 02 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1_02', '1 02:') !!}
    {!! Form::number('1_02', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 02 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1_02_5_1_06', '1 02 5 1 06:') !!}
    {!! Form::number('1_02_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 03 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1_03', '1 03:') !!}
    {!! Form::number('1_03', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 03 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1_03_5_1_06', '1 03 5 1 06:') !!}
    {!! Form::number('1_03_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 04 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1_04', '1 04:') !!}
    {!! Form::number('1_04', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 04 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1_04_5_1_06', '1 04 5 1 06:') !!}
    {!! Form::number('1_04_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 05 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1_05', '1 05:') !!}
    {!! Form::number('1_05', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 05 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1_05_5_1_06', '1 05 5 1 06:') !!}
    {!! Form::number('1_05_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1_06', '1 06:') !!}
    {!! Form::number('1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 1 06 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('1_06_5_1_06', '1 06 5 1 06:') !!}
    {!! Form::number('1_06_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2', '2:') !!}
    {!! Form::number('2', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 07 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_07', '2 07:') !!}
    {!! Form::number('2_07', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 07 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_07_5_1_06', '2 07 5 1 06:') !!}
    {!! Form::number('2_07_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 08 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_08', '2 08:') !!}
    {!! Form::number('2_08', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 08 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_08_5_1_06', '2 08 5 1 06:') !!}
    {!! Form::number('2_08_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 09 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_09', '2 09:') !!}
    {!! Form::number('2_09', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 09 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_09_5_1_06', '2 09 5 1 06:') !!}
    {!! Form::number('2_09_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 10 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_10', '2 10:') !!}
    {!! Form::number('2_10', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 10 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_10_5_1_06', '2 10 5 1 06:') !!}
    {!! Form::number('2_10_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 11 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_11', '2 11:') !!}
    {!! Form::number('2_11', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 11 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_11_5_1_06', '2 11 5 1 06:') !!}
    {!! Form::number('2_11_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 12 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_12', '2 12:') !!}
    {!! Form::number('2_12', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 12 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_12_5_1_06', '2 12 5 1 06:') !!}
    {!! Form::number('2_12_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 13 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_13', '2 13:') !!}
    {!! Form::number('2_13', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 13 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_13_5_1_06', '2 13 5 1 06:') !!}
    {!! Form::number('2_13_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 14 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_14', '2 14:') !!}
    {!! Form::number('2_14', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 14 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_14_5_1_06', '2 14 5 1 06:') !!}
    {!! Form::number('2_14_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 15 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_15', '2 15:') !!}
    {!! Form::number('2_15', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 15 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_15_5_1_06', '2 15 5 1 06:') !!}
    {!! Form::number('2_15_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 16 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_16', '2 16:') !!}
    {!! Form::number('2_16', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 16 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_16_5_1_06', '2 16 5 1 06:') !!}
    {!! Form::number('2_16_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 17 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_17', '2 17:') !!}
    {!! Form::number('2_17', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 17 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_17_5_1_06', '2 17 5 1 06:') !!}
    {!! Form::number('2_17_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 18 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_18', '2 18:') !!}
    {!! Form::number('2_18', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 18 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_18_5_1_06', '2 18 5 1 06:') !!}
    {!! Form::number('2_18_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 19 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_19', '2 19:') !!}
    {!! Form::number('2_19', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 19 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_19_5_1_06', '2 19 5 1 06:') !!}
    {!! Form::number('2_19_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 20 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_20', '2 20:') !!}
    {!! Form::number('2_20', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 20 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_20_5_1_06', '2 20 5 1 06:') !!}
    {!! Form::number('2_20_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 21 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_21', '2 21:') !!}
    {!! Form::number('2_21', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 21 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_21_5_1_06', '2 21 5 1 06:') !!}
    {!! Form::number('2_21_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 22 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_22', '2 22:') !!}
    {!! Form::number('2_22', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 22 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_22_5_1_06', '2 22 5 1 06:') !!}
    {!! Form::number('2_22_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 23 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_23', '2 23:') !!}
    {!! Form::number('2_23', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 23 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_23_5_1_06', '2 23 5 1 06:') !!}
    {!! Form::number('2_23_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 24 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_24', '2 24:') !!}
    {!! Form::number('2_24', null, ['class' => 'form-control']) !!}
</div>

<!-- 2 24 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('2_24_5_1_06', '2 24 5 1 06:') !!}
    {!! Form::number('2_24_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3', '3:') !!}
    {!! Form::number('3', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 25 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_25', '3 25:') !!}
    {!! Form::number('3_25', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 25 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_25_5_1_06', '3 25 5 1 06:') !!}
    {!! Form::number('3_25_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 26 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_26', '3 26:') !!}
    {!! Form::number('3_26', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 26 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_26_5_1_06', '3 26 5 1 06:') !!}
    {!! Form::number('3_26_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 27 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_27', '3 27:') !!}
    {!! Form::number('3_27', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 27 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_27_5_1_06', '3 27 5 1 06:') !!}
    {!! Form::number('3_27_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 28 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_28', '3 28:') !!}
    {!! Form::number('3_28', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 28 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_28_5_1_06', '3 28 5 1 06:') !!}
    {!! Form::number('3_28_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 29 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_29', '3 29:') !!}
    {!! Form::number('3_29', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 29 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_29_5_1_06', '3 29 5 1 06:') !!}
    {!! Form::number('3_29_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 30 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_30', '3 30:') !!}
    {!! Form::number('3_30', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 30 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_30_5_1_06', '3 30 5 1 06:') !!}
    {!! Form::number('3_30_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 31 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_31', '3 31:') !!}
    {!! Form::number('3_31', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 31 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_31_5_1_06', '3 31 5 1 06:') !!}
    {!! Form::number('3_31_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 32 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_32', '3 32:') !!}
    {!! Form::number('3_32', null, ['class' => 'form-control']) !!}
</div>

<!-- 3 32 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('3_32_5_1_06', '3 32 5 1 06:') !!}
    {!! Form::number('3_32_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('4', '4:') !!}
    {!! Form::number('4', null, ['class' => 'form-control']) !!}
</div>

<!-- 4 01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('4_01', '4 01:') !!}
    {!! Form::number('4_01', null, ['class' => 'form-control']) !!}
</div>

<!-- 4 01 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('4_01_5_1_06', '4 01 5 1 06:') !!}
    {!! Form::number('4_01_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 4 02 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('4_02', '4 02:') !!}
    {!! Form::number('4_02', null, ['class' => 'form-control']) !!}
</div>

<!-- 4 02 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('4_02_5_1_06', '4 02 5 1 06:') !!}
    {!! Form::number('4_02_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5', '5:') !!}
    {!! Form::number('5', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_01', '5 01:') !!}
    {!! Form::number('5_01', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 01 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_01_5_1_06', '5 01 5 1 06:') !!}
    {!! Form::number('5_01_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 02 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_02', '5 02:') !!}
    {!! Form::number('5_02', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 02 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_02_5_1_06', '5 02 5 1 06:') !!}
    {!! Form::number('5_02_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 03 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_03', '5 03:') !!}
    {!! Form::number('5_03', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 03 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_03_5_1_06', '5 03 5 1 06:') !!}
    {!! Form::number('5_03_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 04 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_04', '5 04:') !!}
    {!! Form::number('5_04', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 04 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_04_5_1_06', '5 04 5 1 06:') !!}
    {!! Form::number('5_04_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 05 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_05', '5 05:') !!}
    {!! Form::number('5_05', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 05 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_05_5_1_06', '5 05 5 1 06:') !!}
    {!! Form::number('5_05_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_06', '5 06:') !!}
    {!! Form::number('5_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 06 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_06_5_1_06', '5 06 5 1 06:') !!}
    {!! Form::number('5_06_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 07 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_07', '5 07:') !!}
    {!! Form::number('5_07', null, ['class' => 'form-control']) !!}
</div>

<!-- 5 07 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('5_07_5_1_06', '5 07 5 1 06:') !!}
    {!! Form::number('5_07_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 6 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('6', '6:') !!}
    {!! Form::number('6', null, ['class' => 'form-control']) !!}
</div>

<!-- 6 01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('6_01', '6 01:') !!}
    {!! Form::number('6_01', null, ['class' => 'form-control']) !!}
</div>

<!-- 6 01 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('6_01_5_1_06', '6 01 5 1 06:') !!}
    {!! Form::number('6_01_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 7 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('7', '7:') !!}
    {!! Form::number('7', null, ['class' => 'form-control']) !!}
</div>

<!-- 7 01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('7_01', '7 01:') !!}
    {!! Form::number('7_01', null, ['class' => 'form-control']) !!}
</div>

<!-- 7 01 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('7_01_5_1_06', '7 01 5 1 06:') !!}
    {!! Form::number('7_01_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 8 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('8', '8:') !!}
    {!! Form::number('8', null, ['class' => 'form-control']) !!}
</div>

<!-- 8 01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('8_01', '8 01:') !!}
    {!! Form::number('8_01', null, ['class' => 'form-control']) !!}
</div>

<!-- 8 01 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('8_01_5_1_06', '8 01 5 1 06:') !!}
    {!! Form::number('8_01_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 9 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('9', '9:') !!}
    {!! Form::number('9', null, ['class' => 'form-control']) !!}
</div>

<!-- 9 01 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('9_01', '9 01:') !!}
    {!! Form::number('9_01', null, ['class' => 'form-control']) !!}
</div>

<!-- 9 01 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('9_01_5_1_06', '9 01 5 1 06:') !!}
    {!! Form::number('9_01_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 9 02 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('9_02', '9 02:') !!}
    {!! Form::number('9_02', null, ['class' => 'form-control']) !!}
</div>

<!-- 9 02 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('9_02_5_1_06', '9 02 5 1 06:') !!}
    {!! Form::number('9_02_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 9 03 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('9_03', '9 03:') !!}
    {!! Form::number('9_03', null, ['class' => 'form-control']) !!}
</div>

<!-- 9 03 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('9_03_5_1_06', '9 03 5 1 06:') !!}
    {!! Form::number('9_03_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 9 04 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('9_04', '9 04:') !!}
    {!! Form::number('9_04', null, ['class' => 'form-control']) !!}
</div>

<!-- 9 04 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('9_04_5_1_06', '9 04 5 1 06:') !!}
    {!! Form::number('9_04_5_1_06', null, ['class' => 'form-control']) !!}
</div>

<!-- 9 05 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('9_05', '9 05:') !!}
    {!! Form::number('9_05', null, ['class' => 'form-control']) !!}
</div>

<!-- 9 05 5 1 06 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('9_05_5_1_06', '9 05 5 1 06:') !!}
    {!! Form::number('9_05_5_1_06', null, ['class' => 'form-control']) !!}
</div>