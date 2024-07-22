<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Logo;

class Cart extends Model
{
    use HasFactory;
    public function logo()
    {
        return $this->hasOne(Logo::class, 'id', 'logo_id');
    }
}
