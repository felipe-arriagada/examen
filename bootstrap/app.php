<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(
<<<<<<< HEAD
            except: ['/v1/informacion-basica/*', '/v1/quienes-somos/*','/v1/contacto-rrss/*' ]
=======
            except: ['/v1/informacion-basica/*', '/v1/quienes-somos/*']
>>>>>>> 018e7a859f7fd3a09042aa1b24c8afa3cc5fe8a2
            
        );
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
