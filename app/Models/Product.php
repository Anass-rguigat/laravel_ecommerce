<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'sous_title', 'description', 'price', 'color', 'size', 'image', 'category_id'
    ];

    protected $casts = [
        'color' => 'array',
        'size' => 'array',
    ];

    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
