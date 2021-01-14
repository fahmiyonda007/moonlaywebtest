<div class="table-responsive">
    <table class="table table-striped" id="anggotas-table">
        <thead>
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">No Telp</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anggotas as $anggota)
            <tr>
                <td>{{$anggota->kode}}</td>
                <td>{{$anggota->nama}}</td>
                <td>{{$anggota->notelp}}</td>
                <td>
                    {!! Form::open(['route' => ['anggotas.destroy', $anggota->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('anggotas.show', [$anggota->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('anggotas.edit', [$anggota->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' =>
                        'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
