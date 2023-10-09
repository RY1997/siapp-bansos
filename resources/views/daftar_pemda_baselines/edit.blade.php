@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Rincian Bansos pada {{ $daftarPemdaBaseline->nm_pemda }}</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($daftarPemdaBaseline, ['route' => ['daftarPemdaBaselines.update', $daftarPemdaBaseline->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('daftar_pemda_baselines.fields')
                </div>
            </div>

            <div class="card-footer">
                <div class="float-right">
                    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('daftarPemdaBaselines.index') }}" class="btn btn-default">Kembali</a>
                </div>
            </div>
            {!! Form::close() !!}

        </div>

        <div class="card p-3">
            <h6>Daftar Urusan/OPD</h6>
            <div class="card-body p-0 mt-2">
                @include('daftar_opds.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
