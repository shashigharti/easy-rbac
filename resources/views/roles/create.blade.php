@inject('form_helper', 'Robustit\EasyRBAC\Helpers\FormHelper')
@inject('permission_helper', 'Robustit\EasyRBAC\Helpers\PermissionHelper')
<div class="container form-container easy-rbac">
    <div class="panel-box panel-default">
        <div class="form__wrapper">
            <form action="{{$form_helper->getAction($model, $type)}}" method="POST">
                {{csrf_field()}}
                @if($form_helper->getMethod($model) === 'PUT')
                    <input type="hidden" name="_method" value="PUT">
                @endif
                <div class="form-group form-material row">
                    <label for="name" class='control-label'>Name</label>
                    <input type="text" name="name" class='form-control'
                           value="{{$model->name or ''}}"
                           placeholder="Admin User"
                           required>
                </div>
                <div class="form-group form-material row">
                    <label for="description" class='control-label'>Description</label>
                    <textarea name="description" class='form-control'
                              placeholder="Description" required>{{$model->description or ''}}</textarea>
                </div>
                <div class="form-group form-material row">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th><input type="checkbox" class="select_all"></th>
                                <th>Group</th>
                                <th>Permissions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permission_helper->get_all_permissions() as $group => $permissions)
                                <tr>
                                    <td><input type="checkbox" class="permissions select_groups"
                                               id={{$group}} data-group={{ $group }}></td>
                                    <td>{{$group}}</td>
                                    <td>
                                        @if(is_array($permissions))

                                            @foreach($permissions as  $permission)
                                                <input type="checkbox" name="permission[]" value="{{$permission['name']}}"> {{$permission['display_name']}}
                                            @endforeach
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <input type="submit" value="Save" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

