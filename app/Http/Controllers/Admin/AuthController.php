<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\STShop\UserST\UserTable;
use Illuminate\Session\Store;

class AuthController extends Controller
{

    public function __construct(UserTable $userTable, Store $session)
    {
        $this->userTable = $userTable;
        $this->session   = $session;
    }

    public function loginForm()
    {
        return view('admin.login');
    }

    public function login()
    {
        $rawData = request()->input();
        $user = $this->userTable->findByEmail($rawData['email']);

        if(!$user){
            return redirect()->route('login');
        }

        if(! \Hash::check($rawData['password'], $user->password)){
            return redirect()->route('login');
        }

        $this->session->put('user', $user);
        return redirect()->route('admin');

    }

    public function logout()
    {
        $this->session->forget('user');
        return redirect()->route('login');
    }
}