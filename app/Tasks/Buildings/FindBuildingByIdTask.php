<?php


namespace App\Tasks\Buildings;


use App\Repositories\BuildingRepository;

class FindBuildingByIdTask
{
    public function run($id)
    {
       return (new BuildingRepository())->findById($id);
    }
}
