<?php


namespace App\Actions\Buildings;


use App\Core\Parents\Actions\Action;
use App\Repositories\BuildingRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\App;

class BuildingGetAllAction extends Action
{
    public function run() : null|LengthAwarePaginator
    {
        return (new BuildingRepository())->getAllPaginate(20,App::getLocale());
    }
}
