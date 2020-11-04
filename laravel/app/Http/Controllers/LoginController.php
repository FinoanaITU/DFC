<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $userRepository;

    public function __construct()
    {
        $this->middleware('guest');
        $this->userRepository = new UserRepository;
    }

    public function create()
    {
        return view('login.userLogin');
    }

    public function loginCheck(Request $request)
    {

    }
}
