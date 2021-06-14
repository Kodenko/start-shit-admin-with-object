<?php


namespace App\Actions\Buildings;


use App\Core\Parents\Actions\Action;
use App\Repositories\CurrencyRepository;
use App\Repositories\DealRepository;
use App\Repositories\LocaleRepository;
use App\Repositories\TypeRepository;
use App\Repositories\UserRepository;
use App\Tasks\Users\FindByIdUserTask;

class GetAllRelationsInfoAction extends Action
{

    public function run($field,$value)
    {
        if(!is_object($value)){
            $value = (new FindByIdUserTask)->run($value);
        }

        return [
            'types' => (new TypeRepository())->getAll(),
            'currencies' => (new CurrencyRepository())->getAll(),
            'locales' => (new LocaleRepository())->getAll(),
            'deals' => (new DealRepository())->getAll(),
             $field => $value,
            'contacts' => (new UserRepository())->getAllContact(),
            'images' => $value?->getMedia('image'),
            'files' => $value?->getMedia('file'),
            'videos' => $value?->getMedia('video'),
        ];
    }
}
