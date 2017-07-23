<?php

namespace Robustit\EasyRBAC\Helpers;

/**
 * Class TemplateHelper
 * @package Robustit\EasyRBAC\Helpers
 */
class TemplateHelper
{

    /**
     * @param $type
     * @param string $operation
     * @param array $params
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getTemplate($type, $operation = 'create', $params = [])
    {
        return view("easy-rbac::{$type}.{$operation}", $params);
    }
}