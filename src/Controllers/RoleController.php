<?php

namespace Robustit\EasyRBAC\Controllers;

use App\Http\Controllers\Controller;
use Robustit\EasyRBAC\Controllers\Traits\CrudTrait;
use Robustit\EasyRBAC\Repositories\RoleRepository;


/**
 * Class RoleController
 * @package Robust\Admin\Controllers\Admin
 */
class RoleController extends Controller
{
    use CrudTrait;

    /**
     * RoleController constructor.
     * @param RoleRepository $role
     */
    public function __construct(RoleRepository $role)
    {
        $this->model = $role;
        $this->type = "roles";
    }
}