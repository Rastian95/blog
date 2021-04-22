<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios';
    protected $primaryKey = 'id_comentario';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_usuario');
    }

    public function commentable()
    {
        return $this->morphTo();
    }
}
