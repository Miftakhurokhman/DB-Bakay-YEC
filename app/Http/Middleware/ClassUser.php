<?php

namespace App\Http\Middleware;

use App\Models\Kelas;
use App\Models\UserClass;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ClassUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentUser = Auth::user();
        $class = Kelas::findOrFail($request->id);
        $valid = UserClass::where('class_id', $class->id)->where('user_id', $currentUser->id)->first();

        if (!($valid)) {
            return response()->json(['message' => 'data not found'], 404);
        }

        return $next($request);
    }
}
