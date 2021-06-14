<?php


namespace App\Tasks\Users;


use App\Repositories\UserRepository;

class FindByIdUserTask
{
    public function run($id)
    {
        return (new UserRepository())->findById($id);
    }
}
