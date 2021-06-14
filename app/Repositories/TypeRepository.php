<?php


namespace App\Repositories;


use App\Core\Parents\Repositories\Repository;
use App\Models\Type as Model;

class TypeRepository extends Repository
{

    public function getAll()
    {
        return $this->startConditions()->get();

    }

    protected function getModelClass()
    {
        return Model::class;
    }
}
