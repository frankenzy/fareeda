<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'descriptions', 'prix','restaurant_id', 'category_id'
    ];



    public function restaurant():BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function categorie():BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }
}
