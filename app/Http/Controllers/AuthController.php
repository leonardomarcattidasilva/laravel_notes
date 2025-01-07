<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\View\View;

class AuthController extends Controller
{
	public function login(): View
	{
		return view('login');
	}

	public function logout()
	{
		\session()->forget('user');
		return \redirect()->route('login');
	}

	public function loginSubmit(LoginRequest $request)
	{
		$request->validated();

		$username = $request->input('text_username');
		$password = $request->input('text_password');

		$user = User::where([['email', '=', $username], ['deleted_at', '=', null]])->first();

		if ($user) {
			if (\password_verify($password, $user->password)) {
				$user->last_login = \date('Y-m-d H:i:s');
				$user->save();
				session(['user' => ['id' => $user->id, 'username' => $user->userName]]);
				return redirect()->route('home');
			}
		}

		return \redirect()->back()->withInput()->with('loginError', 'Username ou password incorretos');
	}
}
