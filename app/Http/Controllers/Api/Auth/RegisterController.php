<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisterRequest $request)
    {
       $user = User::create($request->getData());

       return response()->json([
        'user'=>$user,
        'token' => $user->createToken('quelara_api_token')->plainTextToken
       ]);
    }
}
