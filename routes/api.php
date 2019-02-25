<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('data', function () {
    $data = collect([
    'bitcoin_usd'=> 4000,
    'ethereum_usd'=> 140,
    'bitcoin_ves_1h'=> 3000,
    'bitcoin_ves_12h'=> 3500,
    'bitcoin_ves_24h'=> 3300,
    'miner_hashrate_actual'=> 48.3,
    'miner_hashrate_reportado'=> 40.8,
    'wallet'=> 0.0015,
    'miner_balance'=> 0.31
]);
return response()->json($data);
});