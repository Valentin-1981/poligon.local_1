<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Illuminate\Notifications\Notifiable;

class BlogCategory extends Model
{
//    use Notifiable;
    use SoftDeletes;
    protected $fillable = ['title', 'slug', 'parent_id', 'description'];

//    public static function paginate(int $int)
//    {
//    }
}
