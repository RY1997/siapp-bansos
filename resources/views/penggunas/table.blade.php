<div class="table-responsive">
    <table class="table" id="penggunas-table">
        <thead class="bg-primary">
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Peran</th>
        <th>Grup</th>
        <th>Unit Kerja</th>
            <th colspan="3">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($penggunas as $pengguna)
            <tr>
                <td>{{ $pengguna->name }}</td>
            <td>{{ $pengguna->email }}</td>
            <td>{{ $pengguna->role }}</td>
            <td>{{ $pengguna->kd_pwk }}</td>
            <td>{{ $pengguna->nm_pemda }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['penggunas.destroy', $pengguna->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('penggunas.edit', [$pengguna->id]) }}"
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
