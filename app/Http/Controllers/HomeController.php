<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function Index()
    {
        $contacts = Contact::all(); //SELECT * FROM contacts
        return view('index', with(['contacts' => $contacts]));
    }

    function new()
    {
        return view('new_contact');
    }

    function single($id)
    {
        $c = Contact::where('id', $id)->first();
        return view('single', with(['c' => $c]));
    }

    function Panel()
    {
        return view('panel');
    }

    function Login()
    {
        return view('login');
    }

    function Logincheck(Request $request)
    {
        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {

            return redirect('/panel')->with(['message' => 'vorod moaffagh']);
        } else {
            return redirect('/login')->with(['message' => 'Login failed  //  
Please try again']);
        }
    }

    function Logout()
    {
        Auth::logout();
        return redirect('/')->with(['message' => 'khoroj az hesab karbari admin']);
    }
}
