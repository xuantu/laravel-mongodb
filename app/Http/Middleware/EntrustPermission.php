<?php

namespace CMS\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;

use Closure;

class EntrustPermission
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $roles = empty($roles) ? null : explode('|', $roles);
        $permissions = empty($permissions) ? null : explode('|', $permissions);

        if (!$this->auth->user()->ability($roles, $permissions)) {
            abort(401);
        }

        return $next($request);
    }
}
