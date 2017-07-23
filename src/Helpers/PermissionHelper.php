<?php

namespace Robustit\EasyRBAC\Helpers;

use Robustit\EasyRBAC\Repositories\PermissionRepository;

/**
 * Class PermissionHelper
 * @package Robustit\EasyRBAC\Helpers
 */
class PermissionHelper
{
    /**
     * PermissionHelper constructor.
     * @param PermissionRepository $permission
     */
    public function __construct(PermissionRepository $permission)
    {
        $this->model = $permission;
    }


    /**
     * @return array
     */
    public function get_all_permissions()
    {
        $all_permissions = $this->model->all();
        $permissions = [];
        foreach ($all_permissions as $permission) {
            $permissions[$permission->group_name] = [
                'id' => $permission->id,
                'name' => $permission->name
            ];
        }
        return $permissions;
    }
}