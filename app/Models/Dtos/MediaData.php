<?php

namespace App\Models\Dtos;

use Carbon\Carbon;
use Cerbero\LaravelDto\Dto;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Concerns\InteractsWithInput;
use Illuminate\Validation\ValidatesWhenResolvedTrait;
use const Cerbero\Dto\PARTIAL;
use const Cerbero\Dto\IGNORE_UNKNOWN_PROPERTIES;

/**
 * The data transfer object for the Media model.
 *
 * @property string $collectionName
 * @property string|null $conversionsDisk
 * @property Carbon|null $createdAt
 * @property string $customProperties
 * @property string $disk
 * @property string $fileName
 * @property int|string $id
 * @property string $manipulations
 * @property string|null $mimeType
 * @property int|string $modelId
 * @property string $modelType
 * @property string $name
 * @property int|null $orderColumn
 * @property string $responsiveImages
 * @property int|string $size
 * @property Carbon|null $updatedAt
 * @property string|null $uuid
 * @property string|null|array|mixed $file
 * @property string|null|array|mixed $alt
 * @property string $task
 * @property string $collection
 * @property string|null $modelm_id
 * @property string $media_id
 *
 */
class MediaData extends Dto
{

    /**
     * The default flags.
     *
     * @var int
     */
    protected static $defaultFlags = PARTIAL | IGNORE_UNKNOWN_PROPERTIES;
}
