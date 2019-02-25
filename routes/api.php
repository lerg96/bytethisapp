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
// function msToTime(s) {
//     let pad = (n, z = 2) => ('00' + n).slice(-z);
//     return pad(s / 3.6e6 | 0) + ':' + pad((s % 3.6e6) / 6e4 | 0) + ':' + pad((s % 6e4) / 1000 | 0);
//   }

function http_get($url, $headers = []){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    return json_decode($response,true);
}
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('data', function () {
    $data = [];
    if (!Cache::has('data')) {
    $EtherScanapiKey = '39XWGCRG2VKR6GXFDG85V5HI5IES9S2G4A';
    $coinMarketCapApiKey = '5a646371-d37c-4b67-8e91-8868991be665';
    $ethAddress = '0xab69e2886AF9eF742b15d28FC103f7B41E1e37c2';
    $coinMarketCapHeaders = [
        'Accepts: application/json',
        'X-CMC_PRO_API_KEY: ' . $coinMarketCapApiKey,
        'Accept-Encoding: deflate, <gzip></gzip>'
    ];
    $bitcoinTicker = 1;
    $ethereumTicker = 1027;
    
    $apiLocalBitcoinUrl = 'https://localbitcoins.com/bitcoinaverage/ticker-all-currencies/';
    $apiCoinMarketCapUrl = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?id=';
    $apiEthermineUrl = 'https://api.ethermine.org/miner/' . $ethAddress . '/dashboard';
    $apiEtherScanUrl = 'https://api.etherscan.io/api?module=account&action=balance&address='. $ethAddress . '&tag=latest&apikey='. $EtherScanapiKey;
    
    $localBitcoinResponse = http_get($apiLocalBitcoinUrl);
    $coinMarketResponseBitcoin = http_get($apiCoinMarketCapUrl.$bitcoinTicker,$coinMarketCapHeaders);
    $coinMarketResponseEthereum = http_get($apiCoinMarketCapUrl.$ethereumTicker,$coinMarketCapHeaders);
    $ethermineResponse = http_get($apiEthermineUrl);
    $etherScanResponse = http_get($apiEtherScanUrl);
    $bitcoin_usd = $coinMarketResponseBitcoin['data'][1]['quote']['USD']['price'];
    $ethereum_usd = $coinMarketResponseEthereum['data'][1027]['quote']['USD']['price'];

    $data = collect([
    'bitcoin_usd'=> number_format($bitcoin_usd,2),
    'ethereum_usd'=> number_format($ethereum_usd,2),
    'bitcoin_ves_1h'=> number_format(($localBitcoinResponse['VES']['avg_1h']/$bitcoin_usd),2),
    'bitcoin_ves_12h'=> number_format(($localBitcoinResponse['VES']['avg_12h']/$bitcoin_usd),2),
    'bitcoin_ves_24h'=> number_format(($localBitcoinResponse['VES']['avg_24h']/$bitcoin_usd),2),
    'miner_hashrate_actual'=> number_format($ethermineResponse['data']['currentStatistics']['currentHashrate']/1000000,2),
    'miner_hashrate_reportado'=> number_format($ethermineResponse['data']['currentStatistics']['reportedHashrate']/1000000,2),
    'wallet'=> number_format($etherScanResponse['result']/1000000000000000000,4),
    'miner_balance'=> number_format($ethermineResponse['data']['currentStatistics']['unpaid']/1000000000000000000,4)
]);
$expiresAt = Carbon\Carbon::now()->addMinutes(15);
Cache::put('data', $data, $expiresAt);
} else {
    $data = Cache::get('data');
}
return response()->json($data);
});