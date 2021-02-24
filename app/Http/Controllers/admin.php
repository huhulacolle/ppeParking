<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin extends Controller
{
    public function listeattente()
    {
        $utilisateur = $_POST['utilisateur'];
        return view('admin.listeattente', compact('utilisateur'));
    }
}
