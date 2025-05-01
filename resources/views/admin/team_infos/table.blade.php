<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="team-infos-table">
            <thead>
            <tr>
                <th>名稱</th>
                <th>簡介</th>
                {{-- <th>Image</th> --}}
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teamInfos as $teamInfo)
                <tr>
                    <td>{{ $teamInfo->name }}</td>
                    <td>{{ $teamInfo->intro }}</td>
                    {{-- <td>{{ $teamInfo->image }}</td> --}}
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admin.teamInfos.destroy', $teamInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.teamInfos.show', [$teamInfo->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.teamInfos.edit', [$teamInfo->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'button', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return check(this)"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $teamInfos])
        </div>
    </div>
</div>
