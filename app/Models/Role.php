<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'id_rol';

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'role_user', 'id_rol', 'id_usuario');
    }

    public function permisos()
    {
        return $this->belongsToMany('App\Models\Permiso', 'permiso_role', 'id_rol', 'id_permiso');
    }
}
