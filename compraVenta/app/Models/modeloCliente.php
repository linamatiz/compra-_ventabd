<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {
    protected $table = 'cliente'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'numero_documento'; // Clave primaria de la tabla

    protected $fillable = [
        'numero_documento',
        'nombre',
        'apellido',
        'correo',
        'fecha',
        'contra',
    ];
}
