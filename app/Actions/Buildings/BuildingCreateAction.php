<?php


namespace App\Actions\Buildings;


use App\Core\Parents\Controllers\WebController;
use App\Models\Building;
use App\Repositories\BuildingRepository;
use Cerbero\Dto\Dto;

class BuildingCreateAction extends WebController
{
    public function run(Dto $dto) : Building
    {
        return (new BuildingRepository())->create($dto->toArray());
    }
}
