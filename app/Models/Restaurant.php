<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'telephone',
        'descriptions',
        'adresse',
        'logo',
        'latitude',
        'longitude',
        'user_id',
    ];

    public function menus():HasMany
    {
        return $this->hasMany(Menu::class);
    }
}
