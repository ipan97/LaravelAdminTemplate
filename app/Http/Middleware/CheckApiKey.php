<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\ApiKey;

class CheckApiKey
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
        $request_api_key = $request->header('api_key');
        if ($request_api_key == null)
            return response('Unauthorized!', 401);
        
        return $this->validate($request_api_key) ? $next($request) : response('Invalid Api Key', 401);

    }

    protected function validate($key)
    {
        return ApiKey::where([['key', '=', $key], ['module', '=', 'public']])->count() == 1;
    }
}
