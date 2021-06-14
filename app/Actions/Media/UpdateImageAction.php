<?php


namespace App\Actions\Media;


use App\Core\Parents\Actions\Action;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class UpdateImageAction extends Action
{
    public  function run($dto)
    {
        $mediaItem = Media::find($dto->media_id);

        $mediaItem->setCustomProperty('name', $dto->name ?? '');

        $mediaItem->setCustomProperty('link', $dto->link ?? '');

        $mediaItem->setCustomProperty('alt', $dto->alt ?? '');

        $mediaItem->setCustomProperty('priority', $dto->priority ?? '');

        $mediaItem->save();

        return $mediaItem;

    }

}
