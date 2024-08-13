<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function registerServant()
    {
        return view('admin.servant.register');
    }

    public function registerServantSubmit(Request $request)
    {
        $request->validate([
            'firstname' => 'required|persian_alpha',
            'lastname' => 'required|persian_alpha',
            'email' => 'nullable|email:rfc,dns|unique:users,email',
            'mobile' => 'required|ir_mobile|unique:users,mobile',
            'national_code' => 'required|ir_national_code|unique:users,national_code',
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'national_code' => $request->national_code,
            'qrcode' => Str::random(120),
            'is_admin' => 1,
            'password' => Hash::make($request->national_code)
        ]);

        return redirect(route('admin.servant.list'));
    }

    public function servantList()
    {
        return view('admin.servant.list');
    }

    public function registerVisitor()
    {
        return view('admin.visitor.register');
    }

    public function registerVisitorSubmit(Request $request)
    {
        $request->validate([
            'firstname' => 'required|persian_alpha',
            'lastname' => 'required|persian_alpha',
            'email' => 'nullable|email:rfc,dns|unique:users,email',
            'mobile' => 'required|ir_mobile|unique:users,mobile',
            'national_code' => 'required|ir_national_code|unique:users,national_code',
            'passport_no' => 'required',
            'father_name' => 'nullable|persian_alpha',
            'country' => 'required|persian_alpha',
            'birth_location' => 'required|persian_alpha',
            'gender' => 'required|persian_alpha'
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'gender' => $request->gender,
            'mobile' => $request->mobile,
            'national_code' => $request->national_code,
            'passport_no' => $request->passport_no,
            'father_name' => $request->father_name,
            'country' => $request->country,
            'birth_location' => $request->birth_location,
            'gender' => $request->gender,
            'code' => rand(111111, 999999),
            'qrcode' => Str::random(120),
            'register_user_id' => auth()->user()->id,
            'password' => Hash::make($request->national_code)
        ]);

        return redirect(route('admin.visitor.list'));
    }

    public function visitorList()
    {
        return view('admin.visitor.list');
    }
}
