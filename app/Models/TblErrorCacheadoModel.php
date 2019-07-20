<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TblErrorCacheadoModel extends Model
{
    protected $primaryKey = "PK_error_cacheado";

    protected $fillable = [
        'mensaje', 'url_error', 'FK_usuario', 'fecha_hora','FK_estatus'
    ];

    public $timestamps = false;

    public static function cacharError($usuario,$mensaje,$url ,$controller,$responseCode){
//        ‌‌@$_SERVER['REQUEST_URI'];
        DB::insert('INSERT INTO tbl_error_cachado(
tbl_error_cachado.FK_usuario,
tbl_error_cachado.mensaje,
tbl_error_cachado.url,
tbl_error_cachado.controller,
tbl_error_cachado.response_code
) VALUES(?, ? , ? , ? , ?)',[$usuario,$mensaje,$url , $controller,$responseCode]);

        return DB::selectOne("SELECT LAST_INSERT_ID() id;")->id;
    }
}
