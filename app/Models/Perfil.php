<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Perfil
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Perfil newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perfil newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perfil query()
 * @mixin \Eloquent
 * @property int $id_perfil
 * @property string $titulo
 * @property string $biografia
 * @property string $sitio_web
 * @property int $id_usuario
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Perfil whereBiografia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfil whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfil whereIdPerfil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfil whereIdUsuario($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfil whereSitioWeb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfil whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perfil whereUpdatedAt($value)
 */
class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfiles';
    protected $primaryKey = 'id_perfil';
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_usuario', 'id');
    }
}
