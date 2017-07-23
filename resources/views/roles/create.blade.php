@inject('form_helper', 'Robustit\EasyRBAC\Helpers\FormHelper')
@inject('permission_helper', 'Robustit\EasyRBAC\Helpers\PermissionHelper')
<div class="container form-container easy-rbac">
    <div class="panel-box panel-default">
        <div class="form__wrapper">
            <form action="{{$form_helper->getAction($model)}}" method= {{$form_helper->getMethod($model)}}>
                {{csrf_field()}}
                <div class="form-group form-material row">
                    <label for="name" class='control-label'>Name</label>
                    <input type="text" name="name" class='form-control' placeholder="Admin User" required>
                </div>
                <div class="form-group form-material row">
                    <label for="description" class='control-label'>Description</label>
                    <textarea name="description" class='form-control' placeholder="Description" required></textarea>
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
                                            @foreach($permissions as  $name => $permissions)
                                                <input type="checkbox" name="permission[]" value="">

                                                {{-- {{Form::checkbox('permission[]', $name, $permission_helper->hasPermission($model, $name),['class' => 'each_permission permissions '.$group.'','data-parent' => $group])}} {{$permissions}}
                                --}}             @endforeach
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

