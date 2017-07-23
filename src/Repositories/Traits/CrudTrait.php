<?php

namespace Robustit\EasyRBAC\Repositories\Traits;

/**
 * Class CrudTrait
 * @package Robustit\EasyRBAC\Repositories\Traits
 */
trait CrudTrait
{
    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    public function update($data, $id)
    {
        return $this->model->find($id)->update($data);
    }


    /**
     * @param $data
     * @return mixed
     */
    public function store($data)
    {
        return $this->model->create($data);
    }
}
