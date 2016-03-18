<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * login
     * @param Request $request
     */
    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $this->validate($request, [
                'email' => 'required|email|max:255',
                'password' => 'required|min:4',
                'remember' => 'in:true',
            ]);

            $remember = !empty($request->input('remember')) ? true : false;
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember))
            {
                $user = Auth::user();
                if($user->role == 'administrator')
                    return redirect()->intended(url('dashboard'));
                else
                    return redirect()->intended(url('user', [Auth::user()->id, Auth::user()->name]));
            } else
            {
                return back()->withInput($request->only('email', 'remember'))->with([
                    'message' => trans('app.noAuth'),
                    'alert'   => 'warning'
                ]);
            }
        } else
        {
            return view('auth.login');
        }
    }

    /**
     * logout
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
