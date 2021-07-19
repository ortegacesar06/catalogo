<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_catalog';

    protected $fillable = [
        'name',
        'image_path',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class, 'catalog_id');
    }
}
