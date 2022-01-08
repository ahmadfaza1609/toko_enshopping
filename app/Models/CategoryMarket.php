<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryMarket extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'category_market';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];


    protected $fillable = [
        'product_id',
        'type_market',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // one to many
    public function product()
    {
        return $this->belongsTo('App/Models/Product', 'product_id', 'id');
    }
}
