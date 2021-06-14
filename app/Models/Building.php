<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\InteractsWithMedia;

class Building extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
        'city',
        'address',
        'description',
        'content',
        'roi',
        'latitude',
        'longitude',
        'currency_id',
        'type_id',
        'locale_id',
    ];

    public function locale()
    {
        return $this->belongsTo(Locale::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function deal()
    {
        return $this->belongsTo(Deal::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
    public function contacts()
    {
        return $this->belongsToMany(User::class);
    }
}
