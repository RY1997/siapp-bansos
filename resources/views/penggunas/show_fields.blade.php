<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $pengguna->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $pengguna->email }}</p>
</div>

<!-- Email Verified At Field -->
<div class="col-sm-12">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $pengguna->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $pengguna->password }}</p>
</div>

<!-- Role Field -->
<div class="col-sm-12">
    {!! Form::label('role', 'Role:') !!}
    <p>{{ $pengguna->role }}</p>
</div>

<!-- Kd Pwk Field -->
<div class="col-sm-12">
    {!! Form::label('kd_pwk', 'Kd Pwk:') !!}
    <p>{{ $pengguna->kd_pwk }}</p>
</div>

<!-- Remember Token Field -->
<div class="col-sm-12">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $pengguna->remember_token }}</p>
</div>

