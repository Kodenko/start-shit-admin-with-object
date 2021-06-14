<?php


namespace App\Actions\Media;

use App\Tasks\Media\AddMediaFromRequestTask;

class AddImageAction
{
    public function run($dto)
    {

        $model = (new $dto->task)->run($dto->modelm_id);

        return (new AddMediaFromRequestTask())->run($model,$dto);
    }
}
