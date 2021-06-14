<?php


namespace App\Actions\Buildings;


use App\Core\Parents\Actions\Action;
use App\Models\Building;
use App\Repositories\BuildingRepository;
use Cerbero\Dto\Dto;

class BuildingUpdateAction extends Action
{
    public function run(int $id,Dto $dto) : Building
    {
        $building = (new BuildingRepository())->update($id,$dto->toArray());

        $building->contacts()->sync($dto->contact_id);

        return $building;
    }
}
