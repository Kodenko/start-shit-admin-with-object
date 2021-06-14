<?php


namespace App\Repositories;


use App\Core\Parents\Repositories\Repository;
use App\Models\User as Model;

class UserRepository extends Repository
{
    public function getAll()
    {
        return $this->startConditions()->get();

    }

    public function getAllContact()
    {
        return $this->startConditions()->where('user_type_id',2)->get();

    }
    public function paginateAllContact($limit)
    {
        return $this->startConditions()->where('user_type_id',2)->paginate($limit);

    }

    public function getAllMember($limit,$locale = 'ru')
    {
        return $this->startConditions()
            ->whereHas('locale',function ($q) use ($locale){
                return $q->where('name',$locale);
            })
            ->where('user_type_id',3)
            ->paginate($limit);

    }

    protected function getModelClass()
    {
        return Model::class;
    }
}
