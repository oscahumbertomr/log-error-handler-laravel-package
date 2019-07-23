

# log-error-handler-laravel-package 


<p align="left">
<a href="https://github.com/oscahumbertomr/log-error-handler-laravel-package"><img src="https://poser.pugx.org/ing-oscar/log-error-hanlder/d/total.svg" alt="Total Downloads"></a>
<a href="https://github.com/oscahumbertomr/log-error-handler-laravel-package"><img src="https://poser.pugx.org/ing-oscar/log-error-hanlder/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://github.com/oscahumbertomr/log-error-handler-laravel-package"><img src="https://poser.pugx.org/ing-oscar/log-error-hanlder/license.svg" alt="License"></a>
</p>



![image](https://user-images.githubusercontent.com/29152675/61724361-5750fd00-ad5d-11e9-841d-898332331874.png)


Libreria para procesar errores cacheados en el backend de [**laravel**][1] , 
poder guardar estos en base de datos , mandarle el error (o no) al cliente 
y poder desplegar el error o log de error en el forntend
- Laravel validator: Puedes guardar los errores de [**laravel validator**][2] en la base de datos para así poder
dar seguimiento a los "defectos" del sistema. 

<p align="center">
<a><img  src="https://user-images.githubusercontent.com/29152675/61723821-48b61600-ad5c-11e9-9aa4-2a6659874be9.png"></a>
</p>
 
- Puedes guardar en base de datos los errores que se ejecutaron dentro de un try catch (correctamente creado) 
y devolver al cliente un id de error para no mostrar el error completo al cliente 

 ![image](https://user-images.githubusercontent.com/29152675/61723031-e0b30000-ad5a-11e9-9994-89b33f204486.png)


 [![Error no identifiacado][1]][1]
 



 
   [1]: https://i.stack.imgur.com/MacLn.png

## Descarga el packete via composer
```console
composer require ing-oscar/log-error-hanlder
```

## Instala la clase LogErrorHandler a tu proyecto de Laravel

```console
php artisan vendor:publish --tag=leh-excpetion-class
```

## Instala el Model TblErrorCacheadoModel a tu proyecto 

```console
php artisan vendor:publish --tag=leh-model
```

## Instala la Migracion tbl_error_cacheado 

```console
php artisan vendor:publish --tag=leh-migration
```

## Instala la libreria javascript logErrorHandler.js

```console
php artisan vendor:publish --tag=leh-js
```
esta libreria depende de sweetalert2 , por lo que tendras que instalarla
```console
npm install sweetalert2
```



[1]: https://laravel.com/
[2]: https://laravel.com/docs/5.8/validation
