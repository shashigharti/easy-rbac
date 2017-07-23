<?php

namespace Robustit\EasyRBAC\Controllers;

use App\Http\Controllers\Controller;
use Robustit\EasyRBAC\Controllers\Traits\CrudTrait;
use Robustit\EasyRBAC\Repositories\PermissionRepository;

/**
 * Class PermissionController
 * @package Robust\Admin\Controllers
 */
class PermissionController extends Controller
{
    use CrudTrait;

    /**
     * PermissionController constructor.
     * @param PermissionRepository $permission
     */
    public function __construct(PermissionRepository $permission)
    {
        $this->model = $permission;
        $this->type = "permissions";
    }
}