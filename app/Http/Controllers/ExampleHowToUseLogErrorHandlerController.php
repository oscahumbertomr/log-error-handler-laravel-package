<?php

namespace App\Http\Controllers;

use App\Exceptions\LogErrorHandler;
use App\Models\TblErrorCacheadoModel;
use http\Exception;
use Illuminate\Http\Request;

class ExampleHowToUseLogErrorHandlerController extends Controller
{
    public function doAnValidateError(Request $request){
        try{
            $request->validate([
                'name' => ['required', 'string', 'max:25'],
                'lastName' => ['nullable', 'string', 'max:150'],
                'Full_name' => ['required', 'string']
            ]);

            TblErrorCacheadoModel::cacharError('error','error','error' ,'error','error' );
        }catch (\Exception $e){
            return LogErrorHandler::cach($e,'ExampleHowToUseLogErrorHandlerController');
        }
    }
}
