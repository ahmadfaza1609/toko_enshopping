<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class CategoryProduct extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'category_product';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];


    protected $fillable = [
        'type_product'
    ];

    // one to many
    public function product()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
