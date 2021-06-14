<?php


namespace App\Repositories;


use App\Core\Parents\Repositories\Repository;
use App\Models\Locale as Model;

class LocaleRepository extends Repository
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
