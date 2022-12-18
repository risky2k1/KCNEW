<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiCategory extends Model
{
    use HasFactory;
    public function propertiCategory(){
        return $this->hasOne(Category::class, 'id', 'id_category');
    }

    public function propertiTintuc(){
        return $this->hasMany(Tintuc::class, 'id_properticategory', 'id');
    }
}
