<?php
namespace Robustit\EasyRBAC\Repositories;

use Robustit\EasyRBAC\Models\Permission;
use Robustit\EasyRBAC\Repositories\Traits\CrudTrait;

/**
 * Class PermissionRepository
 * @package Robust\Admin\Repositories\Admin
 */
class PermissionRepository
{
    use CrudTrait;

    /**
     * @var Permission
     */
    private $model;


    /**
     * PermissionRepository constructor.
     * @param Permission $permission
     */
    public function __construct(Permission $permission)
    {
        $this->model = $permission;
    }


    /**
     * @return Permission
     */
    public function getModel(){
        return $this->model;
    }
}