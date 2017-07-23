@inject('form_helper', 'Robustit\EasyRBAC\Helpers\FormHelper')
<div class="container form-container easy-rbac">
    <div class="panel-box panel-default">
        <div class="form__wrapper">
            <form action="{{$form_helper->getAction($model, $type)}}" method= {{$form_helper->getMethod($model)}}>
                {{csrf_field()}}
                <div class="form-group form-material row">
                    <label for="name" class='control-label'>Name</label>
                    <input type="text" name="name" class='form-control' placeholder="admin.permission.create" required>
                </div>
                <div class="form-group form-material row">
                    <label for="display_name" class='control-label'>Display Name</label>
                    <input type="text" name="display_name" class='form-control' placeholder="Create User" required>
                </div>
                <div class="form-group form-material row">
                    <label for="description" class='control-label'>Description</label>
                    <textarea name="description" class='form-control' placeholder="Description" required></textarea>
                </div>
                <div class="form-group form-material row">
                    <label for="group_name" class='control-label'>Group Name</label>
                    <input type="text" name="group_name" class='form-control' placeholder="core" required>
                </div>
                <input type="submit" value="Save" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>