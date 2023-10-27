@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Rincian Bantuan Sosial</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($pemdaMonitoring, ['route' => ['pemdaMonitorings.update', $pemdaMonitoring->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('pemda_monitorings.fields')
                </div>
            </div>

            <div class="card-footer">
                <div class="float-right">
                    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('pemdaMonitorings.show', [$pemdaMonitoring->id]) }}" class="btn btn-default">Batal</a>
                </div>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
