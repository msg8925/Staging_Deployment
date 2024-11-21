<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\json;

Route::get('/user', function (Request $request) {
    return response()->json(["Name" => "Jake", "Age" => "66"]);
});
