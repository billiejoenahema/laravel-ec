<?php

namespace App\Http\Controllers;

class ServiceProviderTestController extends Controller
{
    public function showServiceProviderTest()
    {
        $encrypt = app()->make('encrypter');
        $password = $encrypt->encrypt('password');
        dd($password, $encrypt->decrypt($password));
    }
}
