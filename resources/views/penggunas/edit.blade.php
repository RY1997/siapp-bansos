@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Pengguna</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($pengguna, ['route' => ['penggunas.update', $pengguna->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('penggunas.fields')
                </div>
            </div>

            <div class="card-footer">
                <div class="float-right">
                    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('penggunas.index') }}" class="btn btn-default">Batal</a>
                </div>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
