<?php

namespace App\Services;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ApiServices {

    public function postToBBR($user) {

        $apiData = [
            'x_userId'  => $user->id,
            'username'  => $user->username,
            'email'     => $user->email,
        ];
        $apiURL = "https://joinsafelyonline.com/join/validate_offer?ofid=2130&";
        $headers = [
            'Content-type' => 'text/json'
        ];

        $response = Http::withHeaders($headers)->post($apiURL, $apiData);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);
        Log::channel( 'api' )->info("response: " . $response . "---status code: " . $statusCode . "---response Body: " . $responseBody );

        if ($statusCode == 0) {
            session()->put('_old_input', ['username' => $user->username, 'email' => $user->email]);
            return redirect('/')->with(['apiErrors' => $responseBody["errors"]]);
        }

        return 0;

    }

    public function postToRockPhase($email, $ip, $trackingId) {

        $apiData = [
            'ip'            => $ip,
            'email'         => $email,
            'source_id'     => 'HF',
            'tracking_id'   => $trackingId,
            'time_stamp'    => now()
        ];
        $apiURL = "https://rockphase.com/api/post-data";
        $headers = [
            'Content-type'  => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDJhNWVlZmM0NmVmMTRlNGIyOGM3MmU2OWNiNzc2ZTc3NTdiZWM4OWZjM2U0ODA0OWU4Y2NiNDAwZmE5ZDJkMDA3YjI5OTMxM2Q3NjY4NjIiLCJpYXQiOjE2MDkxMzAyMzMsIm5iZiI6MTYwOTEzMDIzMywiZXhwIjoxNjQwNjY2MjMzLCJzdWIiOiI1Iiwic2NvcGVzIjpbXX0.j7LolxwQefjVxk5LmOLb4N9f2ojHHY281xGSjgoPAb0-qHFJYwMwm8-AqeIPRaMLz4qzWBHMsW4Qf1pK_NznS-6jV0A6xBN--AylZGOSyx75EHVMNpxDnO6YWEo0bO5rYXyykVseXNbL2Lurybjyh-SSwBW-FYVPnJ1g2txJ1urJKVYXGCmqnyHderM_fDIWioL5verup-AOD_zcWPYogiESK4WJJV1gxhp-S7JnXnxA_old8YVUdB27st160WvZdaSUQsafy3_h5_WwlvivgFs9kLZqDbMOa5tbynWsoRSL-KmrBAEtgjnMGfyuHqCHeQfe9K8qLdCrn6bMyWWG9y7xcbSY_0L4POluEgeAhcnQaoP4BY0DSJAkEOWL_mwiYiJBrxv3FavnHzsAhVVPWzqMWF-A_iHPxzWlZgTTJfPW1vQtjRDnrPqEar0m54E7Fz2gF7wrqDKLO-JVvCJfNUiVMsuoMgDmaOIFYLnXYkR__Q94_lpTZ9weJlbdJITrXBww04R_QRSlzz8IBH7FZHAZdrpWfbXR_zT7xLjIJDtkLuprxHSOxLRUvWG_1XBa4mBfQRk837LwtlnNFjRJXyRKiKBJ6xsbJShhvckPkSytp9xmR6k68YaPnBMpkGnhXg5_Om5CiBR164iLbZYE-cfCB20_Eap0gbPiPQ-qZZg'
        ];

        $response = Http::withHeaders($headers)->post($apiURL, $apiData);
        //$statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);
        Log::channel( 'api' )->info("----Rock Phase Post---- response: " . $response . "---response Body: " . $responseBody );
    }
}
