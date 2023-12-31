<div class="table-responsive">
    <table class="table table-bordered text-center" id="validasiPerwakilans-table">
        <thead class="bg-primary">
            <tr>
                <th rowspan="2">Kode</th>
                <th rowspan="2">Perwakilan BPKP</th>
                <th colspan="2">Jumlah Pemda</th>
                <th colspan="2">Profil Pemerintah Daerah</th>
                <th colspan="2">Rincian Bantuan Sosial</th>
                <th rowspan="2">Progres Pengisian</th>
                <th rowspan="2" colspan="3">Aksi</th>
            </tr>
            <tr>
                <th width="80">Populasi</th>
                <th width="80">Terisi</th>
                <th>Anggaran Bansos</th>
                <th>Realisasi Bansos</th>
                <th>Anggaran Bansos</th>
                <th>Realisasi Bansos</th>
            </tr>
        </thead>
        <tbody>
        @foreach($validasiPerwakilans as $validasiPerwakilan)
            <tr>
                <td>{{ $validasiPerwakilan->kd_pwk }}</td>
                <td class="text-left">{{ $validasiPerwakilan->nm_pwk }}</td>
                <td>{{ $validasiPerwakilan->where('kd_pwk' , $validasiPerwakilan->kd_pwk)->count() }}</td>
                <td>{{ $rincianBansos->where('kd_pwk' , $validasiPerwakilan->kd_pwk)->groupBy('nm_pemda')->count() }}</td>
            <td>@rupiah($validasiPerwakilan->sum_a_5_1_06)</td>
            <td>@rupiah($validasiPerwakilan->sum_r_5_1_06)</td>
            <td>@rupiah($rincianBansos->where('kd_pwk' , $validasiPerwakilan->kd_pwk)->count() > 0 ? $rincianBansos->where('kd_pwk' , $validasiPerwakilan->kd_pwk)->sum('uji_anggaran') : 0)</td>
            <td>@rupiah($rincianBansos->where('kd_pwk' , $validasiPerwakilan->kd_pwk)->count() > 0 ? $rincianBansos->where('kd_pwk' , $validasiPerwakilan->kd_pwk)->sum('uji_realisasi') : 0)</td>
            <td>
                <span class="badge text-xs {{ $validasiPerwakilan->sum_r_5_1_06 != $rincianBansos->where('kd_pwk' , $validasiPerwakilan->kd_pwk)->sum('uji_realisasi') || $rincianBansos->where('kd_pwk' , $validasiPerwakilan->kd_pwk)->count() == 0 || $rincianBansos->where('kd_pwk' , $validasiPerwakilan->kd_pwk)->groupBy('nm_pemda')->count() != $validasiPerwakilan->where('kd_pwk' , $validasiPerwakilan->kd_pwk)->count() ? 'bg-danger' : 'bg-primary' }}">@persen($validasiPerwakilan->sum_r_5_1_06 > 0 ? $rincianBansos->where('kd_pwk' , $validasiPerwakilan->kd_pwk)->groupBy('nm_pemda')->count() / $validasiPerwakilan->where('kd_pwk' , $validasiPerwakilan->kd_pwk)->count() * $rincianBansos->where('kd_pwk' , $validasiPerwakilan->kd_pwk)->sum('uji_realisasi') / $validasiPerwakilan->sum_r_5_1_06 * 100 : 0)%</span></td>
                <td width="220">
                    <div class='btn-group'>
                        <a href="{{ route('validasiPerwakilans.show', [$validasiPerwakilan->kd_pwk]) }}"
                            class='btn btn-warning btn-sm'>
                            <i class="fa fa-search"></i>  Rincian
                        </a>
                        <a href="{{ url('validasiPerwakilans/'.$validasiPerwakilan->kd_pwk.'/ringkasan') }}"
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
