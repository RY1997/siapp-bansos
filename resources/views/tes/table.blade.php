<div class="table-responsive">
    <table class="table" id="tes-table">
        <thead>
        <tr>
            <th>Select</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tes as $tes)
            <tr>
                <td>{{ $tes->select }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tes.destroy', $tes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tes.show', [$tes->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tes.edit', [$tes->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
