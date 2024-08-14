<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function brand() : BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function catalog() : BelongsTo
    {
        return $this->belongsTo(Catalog::class);
    }

    public function storages() : HasMany
    {
        return $this->hasMany(Storage::class);
    }

    public function reviews() : HasMany
    {
        return $this->hasMany(Review::class);
    }

}
