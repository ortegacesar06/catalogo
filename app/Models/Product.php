<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primarykey = "id_product";
    protected $fillable = [
        'name',
        'description',
        'type',
        'price',
        'image_path',
        'account_id',
        'category_id'
        
    ];
}
