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

        Cookie::queue(Cookie::forget('regFormSubmit'));

        return 0;

    }
}
