<?php

namespace Robustit\EasyRBAC\Repositories;

use Robustit\EasyRBAC\Models\Role;
use Robustit\EasyRBAC\Repositories\Traits\QueryTrait;

/**
 * Class UserRepository
 * @package Robustit\EasyRBAC\Repositories
 */
class UserRepository
{
    use QueryTrait;


    /**
     * @var Role
     */
    protected $model;


    /**
     * UserRepository constructor.
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