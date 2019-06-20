<?php

namespace App\Http\Middleware;

use App\RequestLog;
use App\User;
use Closure;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiRequestLogger
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate(Request $request, Response $response)
    {
        if (strpos($request->getPathInfo(), 'api') !== false) {
            $requestLog = new RequestLog();
            $requestLog->timestamp = date('Y-m-d H:i:s', LARAVEL_START);
            $requestLog->url = $request->getPathInfo();
            $requestLog->method = $request->method();
            $requestLog->ip = $request->ip();
            $requestLog->statusCode = $response->getStatusCode();

            $userApiToken = $request->api_token;
            $user = User::where('api_token', '=', $userApiToken)->first();
            $requestLog->user_id = $user->id;

            $requestLog->save();
        }
    }

}
