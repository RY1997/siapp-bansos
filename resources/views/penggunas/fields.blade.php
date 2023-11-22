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
@if (Auth::user()->role == 'Admin')
<div class="form-group col-sm-9">
    {!! Form::select('role', ['' => 'Pilih', 'Admin' => 'Admin', 'Perwakilan BPKP' => 'Perwakilan BPKP', 'Pemerintah Daerah' => 'Pemerintah Daerah'], null, ['class' => 'form-control text-sm custom-select']) !!}
</div>
@else
<div class="form-group col-sm-9">
    <input class="form-control text-sm" type="text" id="role" name="role" value="{{ $pengguna->role }}" readonly>
</div>
@endif

<!-- Kd Pwk Field -->
@if (Auth::user()->role == 'Admin')
<div class="form-group col-sm-3">
    <p>Grup</p>
</div>
<div class="form-group col-sm-9">
    <select class="form-control text-sm custom-select" id="kd_pwk" name="kd_pwk">
        <option selected>Pilih</option>
        @foreach ($kd_pwk as $data1)
        <option value="{{ $data1->kd_pwk }}" {{ $data1->kd_pwk == $pengguna->kd_pwk ? 'selected' : '' }}>{{ $data1->kd_pwk }}</option>
        @endforeach    
    </select>
</div>
@endif

<!-- Nm Pemda Field -->
<div class="form-group col-sm-3">
    <p>Unit Kerja</p>
</div>
@if (Auth::user()->role == 'Admin')
<div class="form-group col-sm-9">
    <select class="form-control text-sm custom-select" id="nm_pemda" name="nm_pemda">
        <option selected>Pilih</option>
        @foreach ($pemda as $data2)
        <option value="{{ $data2->nm_pemda }}" {{ $data2->nm_pemda == $pengguna->nm_pemda ? 'selected' : '' }}>{{ $data2->nm_pemda }}</option>
        @endforeach    
    </select>
</div>
@else
<div class="form-group col-sm-9">
    <input class="form-control text-sm" type="text" id="nm_pemda" name="nm_pemda" value="{{ Auth::user()->nm_pemda }}" readonly>
</div>
@endif