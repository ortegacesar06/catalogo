<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_category';

    protected $fillable = [
        'name',
        'catalog_id',
        
        
    ];

    public function catalog()
    {
        return $this->belongsTo(Catalog::class, 'catalog_id');
    }    

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
