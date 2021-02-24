<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class user extends Controller
{
    public function reservation()
    {
        $utilisateur = $_POST['utilisateur'];
        return view('user.reservation', compact('utilisateur'));
    }
}
