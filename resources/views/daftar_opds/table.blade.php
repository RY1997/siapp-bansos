<div class="table-responsive">
    <table class="table text-center table-bordered" id="daftarOpds-table">
        <thead class="bg-primary">
        <tr>
            <th rowspan="2">Kode</th>
            <th rowspan="2">Nama Urusan</th>
            <th rowspan="2">Nama Instansi</th>
            <th rowspan="2">Belanja Bansos Baseline</th>
            <th colspan="4">Monitoring</th>
            <th rowspan="2">Status</th>
            <th colspan="3" rowspan="2" style="min-width:120px;">Aksi</th>
        </tr>
        <tr>
            <th>Belanja Bansos</th>
            <th>Belanja Tidak Terduga</th>
            <th>Belanja Barang untuk Dijual/Diserahkan kepada Masyarakat</th>
            <th>Belanja Iuran/Jaminan</th>
        </tr>
        </thead>
        <tbody>
        @foreach($daftarOpd as $daftarOpd)
            <tr class="{{ $pemdaMonitoring->{$daftarOpd->kd_column} > 0 ? 'bg-danger' : '' }}">
            <td>{{ $daftarOpd->kd_opd }}</td>
            <td class="text-left">{{ $daftarOpd->urusan }}</td>
            <td class="text-left">{{ $daftarOpd->opd }}</td>
            <td>@rupiah($pemdaMonitoring->{$daftarOpd->kd_column})</td>
            <td>@rupiah($ujiAktBansos->where('nm_opd', $daftarOpd->opd)->where('kd_rek', 15)->sum('uji_anggaran') + 
                $ujiAktBansos->where('nm_opd', $daftarOpd->opd)->where('kd_rek', 17)->sum('uji_anggaran') + 
                $ujiAktBansos->where('nm_opd', $daftarOpd->opd)->where('kd_rek', 20)->sum('uji_anggaran') + 
                $ujiAktBansos->where('nm_opd', $daftarOpd->opd)->where('kd_rek', 22)->sum('uji_anggaran') + 
                $ujiAktBansos->where('nm_opd', $daftarOpd->opd)->where('kd_rek', 25)->sum('uji_anggaran') + 
                $ujiAktBansos->where('nm_opd', $daftarOpd->opd)->where('kd_rek', 27)->sum('uji_anggaran') + 
                $ujiAktBansos->where('nm_opd', $daftarOpd->opd)->where('kd_rek', 30)->sum('uji_anggaran') + 
                $ujiAktBansos->where('nm_opd', $daftarOpd->opd)->where('kd_rek', 32)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('nm_opd', $daftarOpd->opd)->where('kd_rek', 33)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('nm_opd', $daftarOpd->opd)->where('kd_rek', 1)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('nm_opd', $daftarOpd->opd)->where('kd_rek', 4)->sum('uji_anggaran') + 
                $ujiAktBansos->where('nm_opd', $daftarOpd->opd)->where('kd_rek', 5)->sum('uji_anggaran') + 
                $ujiAktBansos->where('nm_opd', $daftarOpd->opd)->where('kd_rek', 6)->sum('uji_anggaran'))</td>
            <td class="text-center">{{ $pemdaMonitoring->{$daftarOpd->kd_column} > 0 ? "Wajib Diisi" : "Opsional" }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ url('/ujiAktBansos/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/') }}"
                           class='btn btn-success btn-sm'>
                            <i class="fa fa-paper-plane"></i>  Isi
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
