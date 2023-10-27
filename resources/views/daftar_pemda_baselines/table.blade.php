<div class="table-responsive">
    <table class="table text-center" id="daftarPemdaBaselines-table">
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
        @foreach($daftarPemdaBaselines as $daftarPemdaBaseline)
            <tr>
            <td>{{ $daftarPemdaBaseline->nm_pemda }}</td>
            <td>{{ $daftarPemdaBaseline->no_perda }}</td>
            <td>{{ $daftarPemdaBaseline->tgl_perda }}</td>
            <td>@rupiah($daftarPemdaBaseline->belanja_daerah)</td>
            <td>{{ number_format($daftarPemdaBaseline->{'5_1_02_01_01_0039'},2,",",".") }}</td>
            <td>{{ number_format($daftarPemdaBaseline->{'5_1_02_02_02'},2,",",".") }}</td>
            <td>{{ number_format($daftarPemdaBaseline->{'5_1_06'},2,",",".") }}</td>
            <td>{{ number_format($daftarPemdaBaseline->{'5_3'},2,",",".") }}</td>
                <td width="120">
                    <!-- {!! Form::open(['route' => ['daftarPemdaBaselines.destroy', $daftarPemdaBaseline->id], 'method' => 'delete']) !!} -->
                    <div class='btn-group'>
                        <!-- <a href="{{ route('daftarPemdaBaselines.show', [$daftarPemdaBaseline->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a> -->
                        <a href="{{ route('daftarPemdaBaselines.edit', [$daftarPemdaBaseline->id]) }}"
                           class='btn btn-success btn-sm'>
                            <i class="fa fa-paper-plane"></i>  Isi
                        </a>
                        <!-- {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} -->
                    </div>
                    <!-- {!! Form::close() !!} -->
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
