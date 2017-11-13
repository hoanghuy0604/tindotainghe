<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Session\Store;

class Authentication
{
    /**
     * Authentication constructor.
     * @param Store $session
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(! $this->session->has('user')){
            return redirect()->route('login');
        }

        return $next($request);
    }
}
