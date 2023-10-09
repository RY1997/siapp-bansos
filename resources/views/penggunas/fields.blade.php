<!-- Name Field -->
<div class="form-group col-sm-3">
    <p>Nama Pengguna</p>
</div>
<div class="form-group col-sm-9">
    {!! Form::text('name', null, ['class' => 'form-control text-sm','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-3">
    <p>Email</p>
</div>
<div class="form-group col-sm-9">
    {!! Form::email('email', null, ['class' => 'form-control text-sm','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-3">
    <p>Ubah Kata Sandi</p>
</div>
<div class="form-group col-sm-9">
    {!! Form::password('password', ['class' => 'form-control text-sm','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<!-- Role Field -->
<div class="form-group col-sm-3">
    <p>Peran</p>
</div>
<div class="form-group col-sm-9">
    <select class="form-control text-sm custom-select" id="role" name="role">
        <option selected>Pilih</option>
        @if (Auth::user()->role == 'Admin')
        <option value="Admin">Admin</option>
        @endif
        @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'Perwakilan BPKP')
        <option value="Perwakilan BPKP">Perwakilan BPKP</option>
        @endif
        <option value="Pemerintah Daerah">Pemerintah Daerah</option>
    </select>
</div>

<!-- Kd Pwk Field -->
@if (Auth::user()->role == 'Admin')
<div class="form-group col-sm-3">
    <p>Grup</p>
</div>
<div class="form-group col-sm-9">
    <select class="form-control text-sm custom-select" id="kd_pwk" name="kd_pwk">
        <option selected>Pilih</option>
        @foreach ($kd_pwk as $data1)
        <option value="{{ $data1->kd_pwk }}">{{ $data1->kd_pwk }}</option>
        @endforeach    
    </select>
</div>
@endif

<!-- Nm Pemda Field -->
<div class="form-group col-sm-3">
    <p>Unit Kerja</p>
</div>
<div class="form-group col-sm-9">
    <select class="form-control text-sm custom-select" id="nm_pemda" name="nm_pemda">
        <option selected>Pilih</option>
        @foreach ($pemda as $data)
        <option value="{{ $data->nm_pemda }}">{{ $data->nm_pemda }}</option>
        @endforeach    
    </select>
</div>