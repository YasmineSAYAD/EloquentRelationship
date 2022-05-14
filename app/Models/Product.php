<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    //product has one category
    //Product *----------1 Category
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    //product can be purchased by many users
    //Product *----------* User
    public function users(){
        return $this->BelongsToMany(User::class);
    }

}
