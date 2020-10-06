<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function path()
    {
        return route('article.show', $this);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
