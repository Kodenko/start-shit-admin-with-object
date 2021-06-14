<?php


namespace App\Actions\Users;


use App\Core\Parents\Actions\Action;
use App\Repositories\UserRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\App;

class GetAllMembersAction extends Action
{
    public function run()  : null|LengthAwarePaginator
    {
        return (new UserRepository())->getAllMember(20,App::getLocale());
    }
}
