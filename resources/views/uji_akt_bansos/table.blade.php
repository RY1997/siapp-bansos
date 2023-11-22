<div class="table-responsive">
    <table class="table table-bordered" id="ujiAktBansos-table">
        <thead class="bg-primary text-center">
        <tr>
        <th>Kode</th>
        <th>Nama OPD</th>
        <th>Uraian Aktivitas</th>
        <th>Bansos Sejenis</th>
        <th>Jumlah KPM</th>
        <th>Keberadaan Juknis</th>
        <th>Basis Data</th>
        <th>Monev Bansos</th>
        <th>Anggaran</th>
        <th>Realisasi</th>
            <th colspan="3" style="min-width:120px;">Aksi</th>
        </tr>
        </thead>
        <tbody>

        <tr class="text-bold bg-secondary">
            <td>A.</td>
            <td colspan="7">Belanja Bantuan Sosial</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 15)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 17)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 20)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 22)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 25)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 27)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 30)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 32)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 15)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 17)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 20)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 22)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 25)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 27)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 30)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 32)->sum('uji_realisasi'))</td>
            <td></td>
        </tr>

        <tr class="text-bold">
            <td>5.1.06.01.01</td>
            <td colspan="7">Belanja Bantuan Sosial kepada Individu</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 15)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 17)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 15)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 17)->sum('uji_realisasi'))</td>
            <td></td>
        </tr>
        <tr>
            <td>5.1.06.01.01.0001</td>
            <td colspan="7">Belanja Bantuan Sosial Uang yang direncanakan kepada Individu</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 15)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 15)->sum('uji_realisasi'))</td>
            <td><a class="btn btn-sm btn-primary float-right" href="{{ url('/ujiAktBansos/create/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/15') }}">+ Rincian</a></td>
        </tr>
        @foreach($ujiAktBansos->where('kd_rek', 15) as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        <tr>
            <td>5.1.06.01.02.0001</td>
            <td colspan="7">Belanja Bantuan Sosial Barang yang Direncanakan kepada Individu</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 17)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 17)->sum('uji_realisasi'))</td>
            <td><a class="btn btn-sm btn-primary float-right" href="{{ url('/ujiAktBansos/create/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/17') }}">+ Rincian</a></td>
        </tr>
        @foreach($ujiAktBansos->where('kd_rek', 17) as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        <tr class="text-bold">
            <td>5.1.06.02.01</td>
            <td colspan="7">Belanja Bantuan Sosial kepada Keluarga</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 20)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 22)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 20)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 22)->sum('uji_realisasi'))</td>
            <td></td>
        </tr>
        <tr>
            <td>5.1.06.02.01.0001</td>
            <td colspan="7">Belanja Bantuan Sosial Uang yang direncanakan kepada Keluarga</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 20)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 20)->sum('uji_realisasi'))</td>
            <td><a class="btn btn-sm btn-primary float-right" href="{{ url('/ujiAktBansos/create/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/20') }}">+ Rincian</a></td>
        </tr>
        @foreach($ujiAktBansos->where('kd_rek', 20) as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        <tr>
            <td>5.1.06.02.02.0001</td>
            <td colspan="7">Belanja Bantuan Sosial Barang yang Direncanakan kepada Keluarga</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 22)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 22)->sum('uji_realisasi'))</td>
            <td><a class="btn btn-sm btn-primary float-right" href="{{ url('/ujiAktBansos/create/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/22') }}">+ Rincian</a></td>
        </tr>
        @foreach($ujiAktBansos->where('kd_rek', 22) as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        <tr class="text-bold">
            <td>5.1.06.03.01</td>
            <td colspan="7">Belanja Bantuan Sosial kepada Kelompok Masyarakat</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 25)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 27)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 25)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 27)->sum('uji_realisasi'))</td>
            <td></td>
        </tr>
        <tr>
            <td>5.1.06.03.01.0001</td>
            <td colspan="7">Belanja Bantuan Sosial Uang yang Direncanakan kepada Kelompok Masyarakat</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 25)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 25)->sum('uji_realisasi'))</td>
            <td><a class="btn btn-sm btn-primary float-right" href="{{ url('/ujiAktBansos/create/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/25') }}">+ Rincian</a></td>
        </tr>
        @foreach($ujiAktBansos->where('kd_rek', 25) as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        <tr>
            <td>5.1.06.03.02.0001</td>
            <td colspan="7">Belanja Bantuan Sosial Barang yang Direncanakan kepada Kelompok Masyarakat</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 27)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 27)->sum('uji_realisasi'))</td>
            <td><a class="btn btn-sm btn-primary float-right" href="{{ url('/ujiAktBansos/create/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/27') }}">+ Rincian</a></td>
        </tr>
        @foreach($ujiAktBansos->where('kd_rek', 27) as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        <tr class="text-bold">
            <td>5.1.06.04.01</td>
            <td colspan="7">Belanja Bantuan Sosial kepada Lembaga Non Pemerintahan (Bidang Pendidikan, Keagamaan dan Bidang Lainnya)</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 30)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 32)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 30)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 32)->sum('uji_realisasi'))</td>
            <td></td>
        </tr>
        <tr>
            <td>5.1.06.04.01.0001</td>
            <td colspan="7">Belanja Bantuan Sosial Uang yang Direncanakan kepada Lembaga Non Pemerintahan (Bidang Pendidikan, Keagamaan dan Bidang Lainnya)</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 30)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 30)->sum('uji_realisasi'))</td>
            <td><a class="btn btn-sm btn-primary float-right" href="{{ url('/ujiAktBansos/create/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/30') }}">+ Rincian</a></td>
        </tr>
        @foreach($ujiAktBansos->where('kd_rek', 30) as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        <tr>
            <td>5.1.06.04.02.0001</td>
            <td colspan="7">Belanja Bantuan Sosial Barang yang Direncanakan kepada Lembaga Non Pemerintahan (Bidang Pendidikan, Keagamaan dan Bidang Lainnya)</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 32)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 32)->sum('uji_realisasi'))</td>
            <td><a class="btn btn-sm btn-primary float-right" href="{{ url('/ujiAktBansos/create/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/32') }}">+ Rincian</a></td>
        </tr>
        @foreach($ujiAktBansos->where('kd_rek', 32) as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        <tr class="text-bold bg-secondary">
            <td>B.</td>
            <td colspan="7">Belanja Tidak Terduga</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 33)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 33)->sum('uji_realisasi'))</td>
            <td></td>
        </tr>
        <tr class="text-bold">
            <td>5.3</td>
            <td colspan="7">Belanja Tidak Terduga</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 33)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 33)->sum('uji_realisasi'))</td>
            <td><a class="btn btn-sm btn-primary float-right" href="{{ url('/ujiAktBansos/create/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/33') }}">+ Rincian</a></td>
        </tr>
        <tr>
            <td>5.3.a</td>
            <td colspan="7">Bansos berupa Uang</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 33)->where('jenis_bansos', 'Uang')->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 33)->where('jenis_bansos', 'Uang')->sum('uji_realisasi'))</td>
            <td></td>
        </tr>
        @foreach($ujiAktBansos->where('kd_rek', 33)->where('jenis_bansos', 'Uang') as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        <tr>
            <td>5.3.b</td>
            <td colspan="7">Bansos berupa Barang</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 33)->where('jenis_bansos', 'Barang')->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 33)->where('jenis_bansos', 'Barang')->sum('uji_realisasi'))</td>
            <td></td>
        </tr>

        @foreach($ujiAktBansos->where('kd_rek', 33)->where('jenis_bansos', 'Barang') as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        <!-- <tr class="text-bold bg-secondary">
            <td>C.</td>
            <td colspan="7">Belanja Barang untuk Dijual/Diserahkan kepada Masyarakat</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 1)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 1)->sum('uji_realisasi'))</td>
            <td></td>
        </tr>
        <tr>
            <td>5.1.02.01.01.0039</td>
            <td colspan="7">Belanja Barang untuk Dijual/Diserahkan kepada Masyarakat</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 1)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 1)->sum('uji_realisasi'))</td>
            <td><a class="btn btn-sm btn-primary float-right" href="{{ url('/ujiAktBansos/create/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/1') }}">+ Rincian</a></td>
        </tr>
        @foreach($ujiAktBansos->where('kd_rek', 1) as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach -->

        <tr class="text-bold bg-secondary">
            <td>C.</td>
            <td colspan="7">Belanja iuran/jaminan</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 4)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 5)->sum('uji_anggaran') + $ujiAktBansos->where('kd_rek', 6)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 4)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 5)->sum('uji_realisasi') + $ujiAktBansos->where('kd_rek', 6)->sum('uji_realisasi'))</td>
            <td></td>
        </tr>
        <tr>
            <td>5.1.02.02.02.0002</td>
            <td colspan="7">Belanja Kontribusi Jaminan Kesehatan bagi PBI</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 4)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 4)->sum('uji_realisasi'))</td>
            <td><a class="btn btn-sm btn-primary float-right" href="{{ url('/ujiAktBansos/create/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/4') }}">+ Rincian</a></td>
        </tr>
        @foreach($ujiAktBansos->where('kd_rek', 4) as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        <tr>
            <td>5.1.02.02.02.0003</td>
            <td colspan="7">Belanja Iuran Jaminan Kesehatan bagi Peserta PBPU dan BP Kelas 3</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 5)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 5)->sum('uji_realisasi'))</td>
            <td><a class="btn btn-sm btn-primary float-right" href="{{ url('/ujiAktBansos/create/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/5') }}">+ Rincian</a></td>
        </tr>
        @foreach($ujiAktBansos->where('kd_rek', 5) as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        <tr>
            <td>5.1.02.02.02.0004</td>
            <td colspan="7">Belanja Bantuan Iuran Jaminan Kesehatan bagi Peserta PBPU dan BP Kelas 3</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 6)->sum('uji_anggaran'))</td>
            <td>@rupiah($ujiAktBansos->where('kd_rek', 6)->sum('uji_realisasi'))</td>
            <td><a class="btn btn-sm btn-primary float-right" href="{{ url('/ujiAktBansos/create/'.$pemdaMonitoring->id.'/'.$daftarOpd->id.'/6') }}">+ Rincian</a></td>
        </tr>
        @foreach($ujiAktBansos->where('kd_rek', 6) as $data)
            <tr>
            <td>Rincian Aktivitas</td>
            <td>{{ $data->nm_opd }}</td>
            <td>{{ $data->uji_nm_aktivitas }}</td>
            <td>{{ $data->uji_bansos_sejenis }}</td>
            <td>{{ $data->uji_kpm }} {{ $data->satuan_kpm }}</td>
            <td>{{ $data->uji_juknis }}</td>
            <td>{{ $data->uji_basis_salur }}</td>
            <td>{{ $data->uji_monev }}</td>
            <td>@rupiah($data->uji_anggaran)</td>
            <td>@rupiah($data->uji_realisasi)</td>
                <td width="120">
                    {!! Form::open(['route' => ['ujiAktBansos.destroy', $data->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ujiAktBansos.edit', [$data->id]) }}"
                           class='btn btn-warning btn-sm'>
                            <i class="fa fa-edit"></i>  Ubah
                        </a>
                        {!! Form::button('<i class="fa fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
