<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function loginUser(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials  = $request->only([
            'email', 'password'
        ]);

        if(Auth::guard('web')->attempt($credentials))
        {
                return redirect('/dashboard')->with('success','Welcome to your dashboard.');

        }
        else
        {
            return redirect('/')->with('error','Something went wrong.');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
