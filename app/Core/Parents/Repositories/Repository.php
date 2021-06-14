<?php


namespace App\Core\Parents\Repositories;

abstract class Repository
{
    protected   $model;

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    abstract protected function getModelClass();

    public function findById($id)
    {
      return  $this->startConditions()->find($id);
    }

    public function getAll()
    {
        return $this->startConditions()->get();
    }

    protected function startConditions()
    {
        return $this->model;
    }
    public function create($dto)
    {
        return $this->startConditions()->create($dto);
    }

    public function update($id,$dto)
    {
        $obj = $this->startConditions()->find($id)->fill($dto);
        $obj->save();
        return $obj;
    }

    public function delete($id)
    {
        return $this->startConditions()->find($id)->destroy();
    }
}
