<?php

namespace App\Models\Dtos;

use Carbon\Carbon;
use Cerbero\LaravelDto\Dto;

use const Cerbero\Dto\PARTIAL;
use const Cerbero\Dto\IGNORE_UNKNOWN_PROPERTIES;

/**
 * The data transfer object for the User model.
 *
 * @property Carbon|null $createdAt
 * @property string $email
 * @property Carbon|null $emailVerifiedAt
 * @property int $id
 * @property string|null $name
 * @property string|null $link
 * @property string|null $years
 * @property string|null $currency_id
 * @property string|null $instagram
 * @property string|null $phone
 * @property string|null $facebook
 * @property string|null $linkedin
 * @property string|null $twitter
 * @property string|null $telegram
 * @property string|null $description
 * @property string|null $user_type_id
 * @property string|null $revenue
 * @property string|null $password
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $rememberToken
 * @property Carbon|null $updatedAt
 */
class UserData extends Dto
{
    /**
     * The default flags.
     *
     * @var int
     */
    protected static $defaultFlags = PARTIAL | IGNORE_UNKNOWN_PROPERTIES;
}
