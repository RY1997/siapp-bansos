<form class="input-group col-sm-4 float-right mb-2">
    <input class="form-control" type="text" name="pemda" value="{{ $search != NULL ? $search : '' }}" placeholder="Ketik Nama Pemda..." />
    <div class="input-group-append">
        <button class="btn btn-success">Cari</button>
    </div>
</form>

<div class="table-responsive">
    <table class="table table-bordered text-center" id="pemdaMonitorings-table">
    <thead class="bg-primary">
        <tr>
            <th rowspan="2">Pemerintah Daerah</th>
            <th colspan="2">Perda APBD</th>
            <th colspan="5">Anggaran Bansos dalam SIPD</th>
            <th colspan="3" style="min-width:120px;" rowspan="2">Aksi</th>
        </tr>
        <tr>
            <th>Nomor</th>
            <th>Tanggal</th>
            <th>Belanja Daerah</th>
            <th>Belanja Barang Pakai Habis</th>
            <th>Belanja Iuran Jaminan/Asuransi</th>
            <th>Belanja Bantuan Sosial</th>
            <th>Belanja Tidak Terduga</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pemdaMonitorings as $pemdaMonitoring)
            <tr>
            <td class="text-left">{{ $pemdaMonitoring->nm_pemda }}</td>
            <td>{{ $pemdaMonitoring->no_perda }}</td>
            <td>{{ $pemdaMonitoring->tgl_perda }}</td>
            <td>@rupiah($pemdaMonitoring->belanja_daerah)</td>
            <td>@rupiah($pemdaMonitoring->{'5_1_02_01_01_0039'})</td>
            <td>@rupiah($pemdaMonitoring->{'5_1_02_02_02'})</td>
            <td>@rupiah($pemdaMonitoring->{'5_1_06'})</td>
            <td>@rupiah($pemdaMonitoring->{'5_3'})</td>
            <td width="120">
                @if ($pemdaMonitoring->status != 'Final')
                <div class='btn-group'>
                    <a href="{{ route('pemdaMonitorings.show', [$pemdaMonitoring->id]) }}"
                        class='btn btn-success btn-sm'>
                        <i class="fa fa-paper-plane"></i>  Isi
                    </a>
                </div>
                @elseif (Auth()->user()->role == 'Admin')
                <div class="btn-group">
                    <a href="{{ route('pemdaMonitorings.show', [$pemdaMonitoring->id]) }}"
                        class='btn btn-primary btn-sm'>Ubah Final
                    </a>
                </div>
                @else
                <div class="btn-group">
                    <button class="btn btn-primary btn-sm" disabled>Final</button>
                </div>
                @endif
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
