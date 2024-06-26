<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        //hasOne, hasMany, belongsTo, belongsToMany
        //belongsTo
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
