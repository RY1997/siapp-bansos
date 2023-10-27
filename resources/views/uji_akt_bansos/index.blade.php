@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Rincian Aktivitas Bansos pada {{ $pemdaMonitoring->nm_pemda }}</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('pemdaMonitorings.show', [$pemdaMonitoring->id]) }}">
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
                    <!-- Nm Pemda Field -->
                    <div class="form-group col-sm-3">
                        <p>Nama Pemerintah Daerah</p>
                    </div>
                    <div class="form-group col-sm-9">
                        <input class="form-control text-sm" type="text" value="{{ $pemdaMonitoring->nm_pemda }}" disabled>
                    </div>

                    <!-- Urusan Field -->
                    <div class="form-group col-sm-3">
                        <p>Nama Urusan</p>
                    </div>
                    <div class="form-group col-sm-9">
                        <input class="form-control text-sm" type="text" value="{{ $daftarOpd->urusan }}" disabled>
                    </div>

                    <!-- Kd Opd Field -->
                    <div class="form-group col-sm-3">
                        <p>Nama OPD</p>
                    </div>
                    <div class="form-group col-sm-2">
                        <input class="form-control text-sm" type="text" value="{{ $daftarOpd->kd_opd }}" disabled>
                    </div>
                    <div class="form-group col-sm-7">
                        <input class="form-control text-sm" type="text" value="{{ $daftarOpd->opd }}" disabled>
                    </div>
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

