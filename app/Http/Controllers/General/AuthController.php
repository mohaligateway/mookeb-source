<?php

namespace App\Http\Controllers\General;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('general.auth.login');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'national_code' => 'required|ir_national_code|exists:users,national_code',
            'password' => 'required'
        ]);

        $user = User::whereNationalCode($request->national_code)->first();

        if(Hash::check($request->password, $user->password)) {   
            if($user->is_admin) {
                Auth::loginUsingId($user->id);
                return redirect('/dashboard');
            } else {
                throw ValidationException::withMessages(['national_code' => 'این کاربر به عنوان مدیر سامانه ثبت نشده است.']);
            }
        }

        throw ValidationException::withMessages(['password' => 'رمز عبور اشتباه وارد شده است.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
