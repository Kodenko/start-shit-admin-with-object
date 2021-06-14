<?php


namespace App\Actions\Front;


use App\Tasks\Buildings\GetAllBuildingsWithFilterTask;
use Cerbero\Dto\Dto;

class DataForListingAction
{
    public function run(Dto $dto)
    {
        return [
            'buildings' => (new GetAllBuildingsWithFilterTask)->run($dto)
        ];

    }
}
