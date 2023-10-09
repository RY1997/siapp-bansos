<div class="table-responsive">
    <table class="table" id="daftarOpds-table">
        <thead class="bg-primary">
        <tr>
        <th>Kode</th>
        <th>Nama Urusan</th>
        <th>Nama Instansi</th>
        <th>Belanja Bansos</th>
        <th>Status</th>
            <th colspan="3" style="min-width:120px;">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($daftarOpd as $daftarOpd)
            <tr class="{{ $daftarPemdaBaseline->{$daftarOpd->kd_column} > 0 ? 'bg-danger' : '' }}">
            <td>{{ $daftarOpd->kd_opd }}</td>
            <td>{{ $daftarOpd->urusan }}</td>
            <td>{{ $daftarOpd->opd }}</td>
            <td>{{ number_format($daftarPemdaBaseline->{$daftarOpd->kd_column},2,",",".") }}</td>
            <td class="text-center">{{ $daftarPemdaBaseline->{$daftarOpd->kd_column} > 0 ? "Wajib Diisi" : "Opsional" }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ url('/ujiAktBansos/'.$daftarPemdaBaseline->id.'/'.$daftarOpd->id.'/') }}"
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
