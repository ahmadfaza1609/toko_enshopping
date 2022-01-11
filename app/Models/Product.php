<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'product';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_ad',
    ];


    protected $fillable = [

        'title',
        'description',
        'stock',
        'price',
        'photo',
        'link_shoope',
        'link_tokped',
        'link_lazada',
        'category_id',
        'updated_at',
        'created_at',
        'deleted_ad',
    ];

    // one to many
    public function category_product()
    {
        return $this->belongsTo(CategoryProduct::class, 'category_id', 'id');
    }

    public function category_market()
    {
        return $this->hasMany(CategoryMarket::class, 'product_id', 'id');
    }
}
