<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;


class AddController extends Controller
{
    function Add(Request $request)
    {
        $c=new contact();

        $c->name=$request ['name'];
        $c->phonenumber=$request['phonenumber'];
        $c->job=$request['job'];
        $c->save();

        return redirect('/');
    }

}
