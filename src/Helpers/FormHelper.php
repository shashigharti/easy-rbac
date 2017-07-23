<?php

namespace Robustit\EasyRBAC\Helpers;

/**
 * Class FormHelper
 * @package Robustit\EasyRBAC\Helpers
 */
class FormHelper
{
    /**
     * @param $model
     * @return string
     */
    public function getMethod($model)
    {
        return $model->exists ? 'PUT' : 'POST';
    }


    /**
     * @param $model
     * @return string
     */
    public function getAction($model)
    {
        return $model->exists ? route('admin.roles.update', [$model->id]) : route('admin.roles.store');
    }
}