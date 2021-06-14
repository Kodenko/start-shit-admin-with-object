<?php


namespace App\Repositories;

use App\Models\Deal as Model;
use App\Core\Parents\Repositories\Repository;

class DealRepository extends Repository
{
    protected function getModelClass()
    {
        return Model::class;
    }

}
