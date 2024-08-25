<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MyMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $content = $response->getContent();
        $content .= '<style>
        body {
            background-color: #f0f0f0;
            color: #333;
            font-family: Arial, sans-serif;
        }
        </style>';
        $response->setContent($content);
        return $response;
    }
}
