<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Post
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @mixin \Eloquent
 * @property int $id_post
 * @property string $nombre
 * @property string $cuerpo
 * @property int|null $id_usuario
 * @property int|null $id_categoria
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Categoria|null $categoria
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCuerpo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereIdCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereIdPost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereIdUsuario($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 */
class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'id_post';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_usuario', 'id');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria', 'id_categoria', 'id_categoria');
    }

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function comentarios()
    {
        return $this->morphMany('App\Models\Comentario', 'commentable');
    }

    public function tags()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable', 'taggables', null, 'id_tag');
    }

}
