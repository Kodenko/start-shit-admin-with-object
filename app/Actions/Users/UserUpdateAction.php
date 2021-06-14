<?php


namespace App\Actions\Users;


use App\Core\Parents\Actions\Action;
use App\Models\User;
use App\Repositories\UserRepository;
use Cerbero\Dto\Dto;

class UserUpdateAction extends Action
{
    public function run(int $id,Dto $dto) : User
    {
        return (new UserRepository())->update($id,$dto->toArray());
    }
}
