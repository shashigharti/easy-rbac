<?php

namespace Robustit\EasyRBAC\Repositories\Traits;

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
     * @param $data
     * @param $id
     * @return mixed
     */
    public function update($data, $id)
    {
        return $this->model->find($id)->store($data);
    }


    /**
     * @param $data
     * @return mixed
     */
    public function store($data)
    {
        dd();
        return $this->model->create($data);
    }
}
