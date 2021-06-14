<?php


namespace App\Actions\Media;


use App\Core\Parents\Actions\Action;
use App\Tasks\Media\AddMediaFromRequestTask;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ReplaceImageAction extends Action
{
    public function run($dto){

        Media::find($dto->media_id)->delete();
        $model = (new $dto->task)->run($dto->modelm_id);
        return (new AddMediaFromRequestTask())->run($model,$dto);
    }

}
