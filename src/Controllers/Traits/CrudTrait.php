<?php

namespace Robustit\EasyRBAC\Controllers\Traits;

use Illuminate\Http\Request;

/**
 * Class CrudTrait
 * @package Robust\Core\Controllers\Admin\Traits
 */
trait CrudTrait
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $records = $this->model->all();
        return view("easy-rbac::{$this->type}.index", [
            'records' => $records
        ]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view("easy-rbac::{$this->type}.create", [
            'model' => $this->model->getModel(),
            'type' => $this->type
        ]);
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $model = $this->model->find($id);
        return view("easy-rbac::{$this->type}.create", [
            'model' => $model,
            'type' => $this->type
        ]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $this->model->store($data);
        return redirect(route("admin.{$this->type}.index"));
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->model->update($data, $id);
        return redirect(route("admin.{$this->type}.index"));
    }
}
