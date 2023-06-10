<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'meta_description',
        'meta_keywords',
        'meta_title',
    ];

    public function servicePack(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'services_service_packs', 'service_id', 'service_pack_id')
            ->withTimestamps();
    }
}