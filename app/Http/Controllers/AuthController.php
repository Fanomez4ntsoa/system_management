<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller 
{
    public function __construct(
    ) {
        // $this->middleware('auth', ['except' => ['showLogin']]);
    }

    public function showLogin() 
    {
        return view('auth.login');
    }

    /**
     * Authenticate user
     *
     * @param Request $request
     */
    public function login(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
            'password'  => 'required|string'
        ]);

        if($validator->fails()) {
            return redirect()
                        ->route('login')
                        ->withErrors($validator)
                        ->withInput();
        }

        $credentials = $request->only(
            'email',
            'password'
        );

        if(Auth::attempt($credentials)) {
            return redirect()->route('welcome');
        }

        return redirect()->route('login')->with(
            'error',
            'Identifiants invalides.'
        );
    }

    public function register()
    {
        return view('auth.register');
    }

    /**
     * Get current user details
     *
     * @return JsonResponse
     */
    // public function me(): JsonResponse
    // {
    //     $user = Auth::user();
    //     return $this->success(data: [
    //         'id'            => $user->id,
    //         'username'      => $user->username,
    //         'email'         => $user->email,
    //         'creationDate'  => $user->created_at,
    //     ]);
    // }

    /**
     * Loggout current User
     *
     * @return JsonResponse
     */
    // public function logout(): JsonResponse
    // {
    //     Auth::logout();
    //     return $this->success(
    //         message:__('success.auth.logged_out'),
    //         httpCode: 200,
    //     );
    // }

    /**
     * Refresh Token
     *
     * @return JsonResponse
     */
    // public function refresh(): JsonResponse
    // {
    //     $token = Auth::refresh();
    //     return $this->success(
    //         data: compact('token')
    //     );
    // }
}
