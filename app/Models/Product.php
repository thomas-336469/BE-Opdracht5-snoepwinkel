<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Magazijn;
use App\Models\ProductPerAllergeen;
use App\Models\ProductPerLeverancier;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function magazijn(): HasOne
    {
        return $this->hasOne(Magazijn::class);
    }

    public function productPerAllergeens(): HasMany
    {
        return $this->hasMany(ProductPerAllergeen::class);
    }

    public function productPerLeveranciers(): HasMany
    {
        return $this->hasMany(ProductPerLeverancier::class);
    }
}
