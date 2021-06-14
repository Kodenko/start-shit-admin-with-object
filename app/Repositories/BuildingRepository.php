<?php


namespace App\Repositories;


use App\Models\Building as Model;
use App\Core\Parents\Repositories\Repository;
use App\Models\Building;

class BuildingRepository extends Repository
{
    protected $model;

    public function getAllPaginate($limit,$locale = 'ru')
    {
        return $this->startConditions()
            ->whereHas('locale',function ($q) use ($locale){
                return $q->where('name',$locale);
            })
            ->paginate($limit);
    }
    protected function getModelClass()
    {
        return Model::class;
    }

    public function filter($dto)
    {

        $query =  $this->startConditions();

        if(isset($dto->filter) && ($filter =$dto->filter) !== null) {
            if (isset($filter['strict']) && $filter['strict']) {
                 foreach ($filter['strict'] as $ks => $rows){
                     if($rows) {
                         $query = $query->where($ks, $rows);
                     }
                 }
            }

            if (isset($filter['from']) && $filter['from']) {

                foreach ($filter['from'] as $kf => $rowf){
                    if($rowf) {
                        $query = $query->where($kf, '>', $rowf);
                    }
                }
            }

            if (isset($filter['to']) && $filter['to']) {

                foreach ($filter['to'] as $kt => $rowt){
                    if($rowt) {
                        $query = $query->where($kt, '<', $rowt);
                    }
                }
            }
        }
        return $query->limit(100)->get();
    }
}
