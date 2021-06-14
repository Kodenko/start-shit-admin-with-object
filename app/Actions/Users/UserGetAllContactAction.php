<?php


namespace App\Actions\Users;


use App\Core\Parents\Actions\Action;
use App\Repositories\UserRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class UserGetAllContactAction extends Action
{
    public function run()  : null|LengthAwarePaginator
    {
    return (new UserRepository())->paginateAllContact(20);
    }
}
