<?php

namespace Sroutier\L51ESKModules\Middleware;

use Sroutier\L51ESKModules\Modules;
use Closure;

class IdentifyModule
{
    /**
     * @var Sroutier\L51ESKModules
     */
    protected $module;

    /**
     * Create a new IdentifyModule instance.
     *
     * @param Sroutier\L51ESKModules $module
     */
    public function __construct(Modules $module)
    {
        $this->module = $module;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $slug)
    {
        $request->session()->put('module', $this->module->where('slug', $slug)->first());

        return $next($request);
    }
}
