<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login() : View
    {
        return view('login');
    }

    public function logout() : string
    {
        return 'Logout';
    }

    public function loginSubmit(LoginRequest $request) : void
    {
        $request->validated();
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        // echo 'Username: ' . $username . "<br>" . 'Password: ' . $password;
        try {
            DB::connection()->getPdo();
            echo 'OK';
        } catch (\PDOException $th) {
            echo $th->getMessage();
        }

        echo 'FIM';
    }
}
