<?php


namespace App\Actions\Media;


use App\Core\Parents\Actions\Action;
use App\Models\Dtos\MediaData;
use Cerbero\Dto\Dto;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class DeleteImageAction extends Action
{
    public function run(Dto $dto)
    {
        $mediaItem = Media::find($dto->media_id);

        $mediaItem->delete();

        return $mediaItem;
    }
}
