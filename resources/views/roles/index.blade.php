<div class="panel form-panel">
    <div class="panel-body">
        <table class="table dataTables table-body form-table">
            <thead>
            <tr>
                <th>Roles</th>
                <th class="text-nowrap text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{$record->name}}</td>
                    <td class="text-nowrap text-right">
                        <a class="btn btn-info btn-edit btn-xs waves-effect waves-light"
                           href="{{route('admin.roles.edit',['id' => $record->id])}}">
                            <i aria-hidden="true" class="site-menu-icon md-edit"></i>
                            Edit</a>
                        <form accept-charset="UTF-8"
                              action="{{route('admin.roles.destroy',['id' => $record->id])}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-info btn-delete btn-xs waves-effect waves-light"
                                    data-message="Are you sure you want to delete?" data-target="#confirmDelete"
                                    data-title="Delete Row" data-toggle="modal" type="button">
                                <i aria-hidden="true" class="site-menu-icon md-delete"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>