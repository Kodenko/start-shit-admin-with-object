<?php


namespace App\Actions\Users;


use App\Core\Parents\Controllers\WebController;
use App\Models\User;
use App\Repositories\UserRepository;
use Cerbero\Dto\Dto;

class UserCreateAction extends WebController
{
    public function run(Dto $dto) : User
    {
        return (new UserRepository())->create($dto->toArray());
    }
}
