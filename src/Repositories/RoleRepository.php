<?php

namespace Robustit\EasyRBAC\Repositories;

use Robustit\EasyRBAC\Models\Role;
use Robustit\EasyRBAC\Repositories\Traits\QueryTrait;

/**
 * Class RoleRepository
 * @package Robustit\EasyRBAC\Repositories\Admin
 */
class RoleRepository
{
    use QueryTrait;

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