<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'penjualan'], function () use ($router) {
    $router->get('/', function () {
        return response()->json([
            'message' => 'Get all list penjualan',
            'error' => false,
            'data' => [
                [
                    "id" => 1,
                    "nomor" => "SALE/00001",
                    "customer" => "Joko"
                ],
                [
                    "id" => 2,
                    "nomor" => "SALE/00002",
                    "customer" => "Asep"
                ],
                [
                    "id" => 3,
                    "nomor" => "SALE/00003",
                    "customer" => "Dadang"
                ],
                [
                    "id" => 4,
                    "nomor" => "SALE/00004",
                    "customer" => "Udin"
                ],
                [
                    "id" => 5,
                    "nomor" => "SALE/00005",
                    "customer" => "Amang"
                ],
            ]
        ]);
    });

    $router->get('/{id}', function ($id) {
        return response()->json([
            'message' => "Get detail penjualan id: $id",
            'error' => false,
            'data' => [
                "id" => 1,
                "nomor" => "SALE/00001",
                "customer" => "Joko",
                "alamat" => "Jl. Jakarta",
                "total" => 20000000
            ]
        ]);
    });

    $router->post('/', function (Request $req) {
        return response()->json([
            'message' => "Success input data",
            'error' => false,
            'data' => [
                "nomor" => $req->nomor,
                "customer" => $req->customer,
                "alamat" => $req->alamat,
                "total" => $req->total
            ]
        ]);
    });

    $router->put('/{id}', function (Request $req, $id) {
        return response()->json([
            'message' => "Success update data id: $id",
            'error' => false,
            'data' => [
                "id" => $id,
                "nomor" => $req->nomor,
                "customer" => $req->customer,
                "alamat" => $req->alamat,
                "total" => $req->total
            ]
        ]);
    });

    $router->delete('/{id}', function ($id) {
        return response()->json([
            'message' => "Success delete data id: $id",
            'error' => false,
        ]);
    });
});
