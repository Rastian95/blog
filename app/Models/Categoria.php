<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * App\Models\Categoria
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria query()
 * @mixin \Eloquent
 * @property int $id_categoria
 * @property string $nombre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereIdCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categoria whereUpdatedAt($value)
 */
class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    protected $primaryKey = 'id_categoria';
    protected $fillable = [
        'nombre',
        'slug'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function($model){
            $model->slug = Str::slug($model->nombre);
        });
        self::updating(function($model){
            $model->slug = Str::slug($model->nombre);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'id_categoria', 'id_categoria');
    }
}
