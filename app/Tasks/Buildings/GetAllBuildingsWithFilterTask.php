<?php


namespace App\Tasks\Buildings;


use App\Repositories\BuildingRepository;
use Cerbero\Dto\Dto;

class GetAllBuildingsWithFilterTask
{
public function run(Dto $dto)
{
    return (new BuildingRepository())->filter($dto);
}
}
