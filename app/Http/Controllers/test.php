<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class test extends Controller
{
    public function testinscription()
    {
        $user = $_POST['user'];
        $pswd = Hash::make($_POST['pswd']);
        return view('testinscriptionresultat', compact('user'), compact('pswd'));
    }
}
