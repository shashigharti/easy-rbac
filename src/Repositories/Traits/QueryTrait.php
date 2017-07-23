<?php

namespace Robustit\EasyRBAC\Repositories\Traits;

/**
 * Class QueryTrait
 * @package Robustit\EasyRBAC\Repositories\Traits
 */
/**
 * Class QueryTrait
 * @package Robustit\EasyRBAC\Repositories\Traits
 */
trait QueryTrait
{

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->find($id);
    }
}
