<?php


namespace App\Tasks\Media;


class AddMediaFromRequestTask
{
    public function run($model,$dto)
    {

      return  $model->addMediaFromRequest('file')
            ->sanitizingFileName(
                function ($fileName) {
                    return strtolower(
                        str_replace(['#', '/', '\\', ' '], '-', $fileName)
                    );
                }
            )
            ->withCustomProperties(
                [
                    'alt' => $dto->alt ?? '',
                    'name' => $dto->name ?? '',
                ]
            )
            ->toMediaCollection($dto->collection);
    }
}
