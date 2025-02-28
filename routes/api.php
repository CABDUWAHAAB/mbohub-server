<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// GraphQL endpoint
Route::post('/graphql', '\Nuwave\Lighthouse\Http\Controllers\GraphQLController@query');
