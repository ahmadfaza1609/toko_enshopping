<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeroLanding extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'hero_landing';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];


    protected $fillable = [
        'title_hero',
        'sub_heading',
        'img_illustration',
        'updated_at',
        'created_at',
        'deleted_at',
    ];
}
