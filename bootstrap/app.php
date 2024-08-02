<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\adminAgenda;
use App\Http\Middleware\adminPosyandu;
use App\Http\Middleware\superadmin;
use App\Http\Middleware\adminPeta;
use App\Http\Middleware\adminPengaduan;
use App\Http\Middleware\isLogin;
use App\Http\Middleware\notLogin;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            'adminAgenda' => adminAgenda::class,
            'adminPosyandu' => adminPosyandu::class,
            'superadmin' => superadmin::class,
            'adminPeta' => adminPeta::class,
            'adminPengaduan' => adminPengaduan::class,
            'isLogin' => isLogin::class,
            'notLogin' => notLogin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
