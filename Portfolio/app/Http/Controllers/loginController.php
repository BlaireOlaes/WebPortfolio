<?php

namespace App\Http\Controllers;

use App\Models\firstModel;
use App\Models\loginModel;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        $users = User::find(1);
        $infos = firstModel::find(1);

        return view('login', ['users' => $users], ['infos' => $infos]);
    }

    public function create(Request $request)
    {

        $contact = User::find(1);
        $contact->fullName = $request->input("fullName");
        $contact->section = $request->input("section");
        $contact->email = $request->input("email");
        $contact->contact = $request->input("contact");
        // $contact->password = bcrypt($request->input("Password"));
        $contact->update();

        $information = firstModel::find(1);
        $information->introduction = $request->input("introduction");
        $information->bio = $request->input("bio");
        $information->edu = $request->input("edu");
        $information->skill1 = $request->input("skill1");
        $information->skill1Dis = $request->input("skill1Dis");
        $information->skill2 = $request->input("skill2");
        $information->skill2Dis = $request->input("skill2Dis");
        $information->skill3 = $request->input("skill3");
        $information->skill3Dis = $request->input("skill3Dis");
        $information->Like1 = $request->input("Like1");
        $information->Like1Dis = $request->input("Like1Dis");
        $information->Like2 = $request->input("Like2");
        $information->Like2Dis = $request->input("Like2Dis");
        $information->Like3 = $request->input("Like3");
        $information->Like3Dis = $request->input("Like3Dis");
        $information->Dis1 = $request->input("Dis1");
        $information->Dis1Dis = $request->input("Dis1Dis");
        $information->Dis2 = $request->input("Dis2");
        $information->Dis2Dis = $request->input("Dis2Dis");
        $information->Dis3 = $request->input("Dis3");
        $information->Dis3Dis = $request->input("Dis3Dis");

        $information->update();

        return redirect()->route('index');
    }
}
