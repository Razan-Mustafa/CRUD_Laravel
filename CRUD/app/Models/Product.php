<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $fillable = [
        'name',
        'price',
        'discription',
=======
    public $timestamps = false;

    protected $fillable = [
        'name',
        'Price',
        'discription'
>>>>>>> 3d0b842cf1f689c402e525f0a8e29a584fd3dc89
    ];
}
