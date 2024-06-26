<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 系统首页
Route::get('/', function () {
    return redirect('/' . config('easyadmin.ADMIN'));
})->middleware([\App\Http\Middleware\CheckInstall::class]);

// 首次安装管理系统
Route::controller(\App\Http\Controllers\common\InstallController::class)->group(function () {
    Route::match(['get', 'post'], '/install', 'index');
});

// 后台所有路由
$admin = config('admin.admin_alias_name');
Route::middleware([\App\Http\Middleware\SystemLog::class, \App\Http\Middleware\CheckAuth::class])->group(function () use ($admin) {
    Route::prefix($admin)->group(function () {

        // 后台首页
        Route::get('/', [\App\Http\Controllers\admin\IndexController::class, 'index']);

        $adminNamespace = config('admin.controller_namespace');
        // 动态路由 (匹配 secondary/controller.action)
        Route::match(['get', 'post'], '/{secondary}.{controller}/{action}', function ($secondary, $controller, $action) use ($adminNamespace) {

            $namespace = $adminNamespace . $secondary . '\\';
            $className = $namespace . ucfirst($controller . "Controller");
            $className = Str::studly($className);
            if (class_exists($className)) {
                $obj = new $className();
                if (method_exists($obj, $action)) {
                    $reflectionClass = new ReflectionClass($className);
                    $actionMethod    = $reflectionClass->getMethod($action);
                    $args            = [];
                    foreach ($actionMethod->getParameters() as $items) {
                        try {
                            $args[] = new ($items->getType()->getName());
                        }catch (Throwable $exception) {
                        }
                    }
                    return call_user_func([$obj, $action], ...$args);
                }
            }
            abort(404);
        });

        // 动态路由 (匹配 controller)
        Route::match(['get', 'post'], '/{controller}/', function ($controller) use ($adminNamespace) {
            $namespace = $adminNamespace;
            $className = $namespace . ucfirst($controller . "Controller");
            $action    = 'index';
            if (class_exists($className)) {
                $obj = new $className();
                if (method_exists($obj, $action)) {
                    $reflectionClass = new ReflectionClass($className);
                    $actionMethod    = $reflectionClass->getMethod($action);
                    $args            = [];
                    foreach ($actionMethod->getParameters() as $items) {
                        try {
                            $args[] = new ($items->getType()->getName());
                        }catch (Throwable $exception) {
                        }
                    }
                    return call_user_func([$obj, $action], ...$args);
                }
            }
            abort(404);
        });

        // 动态路由 (匹配 controller/action)
        Route::match(['get', 'post'], '/{controller}/{action}', function ($controller, $action) use ($adminNamespace) {
            $namespace = $adminNamespace;
            $className = $namespace . ucfirst($controller . "Controller");
            if (class_exists($className)) {
                $obj = new $className();
                if (method_exists($obj, $action)) {
                    $reflectionClass = new ReflectionClass($className);
                    $actionMethod    = $reflectionClass->getMethod($action);
                    $args            = [];
                    foreach ($actionMethod->getParameters() as $items) {
                        try {
                            $args[] = new ($items->getType()->getName());
                        }catch (Throwable $exception) {
                        }
                    }
                    return call_user_func([$obj, $action], ...$args);
                }
            }
            abort(404);
        });

    });
});

