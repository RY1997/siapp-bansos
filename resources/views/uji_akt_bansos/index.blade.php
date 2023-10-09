@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Rincian Aktivitas Bansos pada {{ $daftarPemdaBaseline->nm_pemda }}</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('daftarPemdaBaselines.edit', [$daftarPemdaBaseline->id]) }}">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('uji_akt_bansos.index_fields')
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body p-3">
                @include('uji_akt_bansos.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

