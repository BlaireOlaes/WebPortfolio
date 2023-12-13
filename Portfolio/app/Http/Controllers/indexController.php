<?php

namespace App\Http\Controllers;

use App\Models\firstModel;
use App\Models\User;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $users = User::find(1);
        $infos = firstModel::find(1);

        return view('index', ['users' => $users], ['infos' => $infos]);
    }
}
