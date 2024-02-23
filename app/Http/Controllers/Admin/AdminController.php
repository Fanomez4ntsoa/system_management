<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Admin\AdminServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller 
{
    public function __construct(
        protected AdminServiceInterface $adminService
    ) {
        // Do nothing
    }

    public function showRegister() {
        return view ('auth.register');
    }
    
    public function create(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'firstname'         => 'required|string|min:2|max:64',
            'lastname'          => 'required|string|min:2|max:64',
            'email'             => 'required|string|min:2|max:64',
            'password'          => 'required|string|min:2|max:64',
            'confirm_password'  => 'required|string|min:2|max:64|same:password'
        ]);

        try {
            if($validator->fails()) {
                return redirect()
                            ->back()
                            ->withErrors($validator)
                            ->withInput();
            }

            $user = $this->adminService->create(
                $request->firstname,
                $request->lastname,
                $request->email,
                $request->password
            );

            if($user) {
                return redirect()
                            ->route('login')
                            ->with('success', 'Utilisateur créer avec succès');
            }
            return redirect()
                        ->back('')
                        ->with('error', 'Une erreur s\'est produite');

        } catch (\Throwable $th) {
            Log::error($th->getMessage(), $th->getTrace());
            return redirect()->back()->with('error', 'An error occurred');
        }
    }
}