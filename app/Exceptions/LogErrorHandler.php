<?php


namespace App\Exceptions;


use App\Models\TblErrorCacheadoModel;
use Illuminate\Support\Facades\Auth;

class LogErrorHandler
{
    public static function cach($error,$controller){
        $usuario_id = null;
        if(Auth::check()){
            $usuario_id = Auth::id();
        }
        if (isset($error->validator)) {
            $logErrorId = TblErrorCacheadoModel::cacharError(
                $usuario_id, $error->validator->errors(), $_SERVER['REQUEST_URI'], $controller , 422
            );
            return response()->json(array(
                "errors" => $error->validator->errors(),
                "message" => 'Los datos dados no son válidos',
                "logErrorId" => $logErrorId
            ), 422);
        } else {
            $logErrorId = TblErrorCacheadoModel::cacharError(
                $usuario_id, $error->getMessage(), $_SERVER['REQUEST_URI'], $controller , 409
            );
            return response()->json(array("logErrorId" => $logErrorId), 409);
        }
    }
}
