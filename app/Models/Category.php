<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    
    public function categoryProperti(){
        return $this->hasMany(PropertiCategory::class, 'id_category', 'id');
    }

    public function categoryTintuc(){
        return $this->hasMany(Tintuc::class, 'id_category', 'id');
    }
}
