<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    use HasFactory;

    public function tintucProperti(){
        return $this->hasOne(PropertiCategory::class, 'id', 'id_properticategory');
    }

    public function tintucCategory(){
        return $this->hasOne(Category::class, 'id', 'id_category');
    }

    public function tintucUser(){
        return $this->hasOne(User::class, 'id', 'tacgia');
    }


    public function tintucComment(){
        return $this->hasMany(Binhluan::class, 'id_tintuc', 'id');
    }

}
