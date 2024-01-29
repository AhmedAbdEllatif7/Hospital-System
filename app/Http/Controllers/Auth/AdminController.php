<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function store(AdminLoginRequest $request)
    {
        if($request->authenticate()) {

            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
        }

        return redirect()->back()->withErrors([trans('email') => trans('the email or password is wrong')]);
    }





    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
