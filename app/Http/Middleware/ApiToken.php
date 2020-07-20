<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class ApiToken
{

    public function handle($request, Closure $next)
    {
        $authHeader = $request->header('authorization');
        if (empty ($authHeader)) {
            return response()->json([
                'success' => false,
                'error' => 'You have to insert an api token'
            ]);
        }

        $apiToken = substr($authHeader,7); //devo togliere il 'bearer' di fronte della api key
        // dd($apiToken);
        $tokenAuth = User::where('api_token' , $apiToken)->first();
        //vedo se il token è uguale ad altro token esistente nel Db. Non posso usare auth::user, perché è una chiamata ajax e non c'è un utente loggato.
        // dd($tokenAuth);
        if (empty($tokenAuth)) {
            return response()->json([
                'success' => false,
                'error' => 'Your api token is not correct',
                'response' => '[]'
            ]);
        }
        return $next($request);




    }
}
