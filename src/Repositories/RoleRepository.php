<?php

namespace Robustit\EasyRBAC\Repositories;

use Robustit\EasyRBAC\Models\Role;
use Robustit\EasyRBAC\Repositories\Traits\CrudTrait;

/**
 * Class RoleRepository
 * @package Robustit\EasyRBAC\Repositories\Admin
 */
class RoleRepository
{
    use CrudTrait;

    /**
     * @var Role
     */
    protected $model;

    /**
     * RoleRepository constructor.
     * @param Role $role
     */
    public function __construct(Role $role)
    {
        $this->model = $role;
    }

    /**
     * @return Role
     */
    public function getModel(){
        return $this->model;
    }
}