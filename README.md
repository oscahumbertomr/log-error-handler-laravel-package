# log-error-handler-laravel-package
Libreria para procesar errores cacheados en el backend de laravel , 
poder guardar estos en base de datos , mandarle el error (o no) al cliente 
y poder desplegar el erro o log de error en el forntend

##Instala la clase LogErrorHandler a tu proyecto de Laravel

```console
php artisan vendor:publish --tag=leh-excpetion-class
```

##Instala el Model TblErrorCacheadoModel a tu proyecto 

```console
php artisan vendor:publish --tag=leh-model
```

##Instala la Migracion tbl_error_cacheado 

```console
php artisan vendor:publish --tag=leh-migration
```

##Instala la libreria javascript logErrorHandler.js

```console
php artisan vendor:publish --tag=leh-js
```
esta libreria depende de sweetalert2 , por lo que tendras que instalarla
```console
npm install sweetalert2
```


