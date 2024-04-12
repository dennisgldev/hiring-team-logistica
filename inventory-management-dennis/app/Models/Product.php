<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'name', 'category', 'stock', 'hasStock'];

    public function productHistory()
    {
        return $this->hasMany(ProductHistory::class);
    }
}
