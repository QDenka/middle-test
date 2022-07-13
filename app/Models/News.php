<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'name', 'text', 'category_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:d.m.y в H:i',
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
