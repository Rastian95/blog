<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Video
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video query()
 * @mixin \Eloquent
 */
class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';
    protected $primaryKey = 'id_video';

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_usuario', 'id');
    }

    public function comentarios()
    {
        return $this->morphMany('App\Models\Comentario', 'commentable');
    }

    public function tags()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
