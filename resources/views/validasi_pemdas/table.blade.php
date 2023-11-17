<div class="table-responsive">
    <table class="table table-bordered text-center" id="validasiPemdas-table">
        <thead class="bg-primary">
            <tr>
                <th rowspan="2">Kode</th>
                <th rowspan="2">Pemerintah Daerah</th>
                <th colspan="2">Profil Pemerintah Daerah</th>
                <th colspan="2">Rincian Bantuan Sosial</th>
                <th rowspan="2">Progres Pengisian</th>
                <th rowspan="2" colspan="3">Aksi</th>
            </tr>
            <tr>
                <th>Anggaran Bansos</th>
                <th>Realisasi Bansos</th>
                <th>Anggaran Bansos</th>
                <th>Realisasi Bansos</th>
            </tr>
        </thead>
        <tbody>
        @foreach($validasiPemdas as $validasiPemda)
            <tr>
                <td>{{ $validasiPemda->kd_pwk }}</td>
                <td class="text-left">{{ $validasiPemda->nm_pemda }}</td>
            <td>@rupiah($validasiPemda->a_5_1_06)</td>
            <td>@rupiah($validasiPemda->r_5_1_06)</td>
            <td>@rupiah($rincianBansos->where('nm_pemda' , $validasiPemda->nm_pemda)->count() > 0 ? $rincianBansos->where('nm_pemda' , $validasiPemda->nm_pemda)->sum('uji_anggaran') : 0)</td>
            <td>@rupiah($rincianBansos->where('nm_pemda' , $validasiPemda->nm_pemda)->count() > 0 ? $rincianBansos->where('nm_pemda' , $validasiPemda->nm_pemda)->sum('uji_realisasi') : 0)</td>
            <td><span class="badge text-xs {{ $validasiPemda->a_5_1_06 != $rincianBansos->where('nm_pemda' , $validasiPemda->nm_pemda)->sum('uji_anggaran') || $rincianBansos->where('nm_pemda' , $validasiPemda->nm_pemda)->sum('uji_anggaran') > 0 || $rincianBansos->where('nm_pemda' , $validasiPemda->nm_pemda)->count() == 0 ? 'bg-danger' : 'bg-primary'}}">@persen($validasiPemda->a_5_1_06 > 0 ? $rincianBansos->where('nm_pemda' , $validasiPemda->nm_pemda)->sum('uji_anggaran') / $validasiPemda->a_5_1_06 * 100 : 0)%</span></td>
                <td width="250">
                    <div class='btn-group'>
                        <a href="{{ route('validasiPemdas.show', [$validasiPemda->id]) }}"
                            class='btn btn-warning btn-sm'>
                            <i class="fa fa-search"></i>  Rincian
                        </a>
                        <a href="{{ url('validasiPemdas/'.$validasiPemda->id.'/ringkasan') }}"
                            class='btn btn-success btn-sm'>
                            <i class="fa fa-paper-plane"></i>  Ringkasan
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
