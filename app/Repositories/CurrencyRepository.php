<?php


namespace App\Repositories;


use App\Core\Parents\Repositories\Repository;
use App\Models\Currency as Model;

class CurrencyRepository extends Repository
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
