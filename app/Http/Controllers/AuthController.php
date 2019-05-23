<?php

namespace App\Http\Controllers;

use App\Services\ApiService;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $api;
    public function __construct(ApiService $api)
    {
        $this->api = $api;
    }

    public function index(){
        return view('contents.login');
    }

    public function register(){
        return view('contents.register');
    }
}
