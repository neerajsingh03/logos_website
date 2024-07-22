<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Categories;

class Logo extends Model
{
    use HasFactory;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    protected $fillable = [
        'name',
        'slug',
        'price',
        'stock',
        'is_approved',
        'is_disapproved',
        'status',
    ];
    public function categories()
    {
        return $this->hasOne(Categories::class, 'id', 'category_id');
    }
}
