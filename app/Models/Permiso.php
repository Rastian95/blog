<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $table = 'permisos';
    protected $primaryKey = 'id_permiso';

    public function permisos()
    {
        return $this->belongsToMany('App\Models\Role', 'permiso_role', 'id_permiso', 'id_rol');
    }
}
