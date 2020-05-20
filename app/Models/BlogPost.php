<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class BlogPost extends Model
{
    use Notifiable;
    use SoftDeletes;
    protected $fillable = ['category_id', 'user_id', 'title', 'slug', 'excerpt', 'id'
        ];
}
