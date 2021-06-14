<?php

namespace App\Models\Dtos;

use Carbon\Carbon;
use Cerbero\LaravelDto\Dto;

use const Cerbero\Dto\NONE;
use const Cerbero\Dto\PARTIAL;
use const Cerbero\Dto\IGNORE_UNKNOWN_PROPERTIES;

/**
 * The data transfer object for the Building model.
 *
 * @property Carbon|null $createdAt
 * @property int $id
 * @property Carbon|null $updatedAt
 * @property string|null $name
 * @property string|null $country
 * @property string|null $city
 * @property string|null $address
 * @property string|null $description
 * @property string|null $content
 * @property int|null|string $roi
 * @property float|null|string $latitude
 * @property float|null|string $longitude
 * @property int|null|string $currency_id
 * @property int|null|string $type_id
 * @property int|null|string $locale_id
 * @property int|null|string $deal_id
 * @property int|null|array $filter
 * @property int|null|string|array $contact_id
 *
 */
class BuildingData extends Dto
{
    /**
     * The default flags.
     *
     * @var int
     */
    protected static $defaultFlags = NONE;
}
