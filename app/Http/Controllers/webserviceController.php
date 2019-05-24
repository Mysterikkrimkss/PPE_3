<?php

namespace LGSB\Http\Controllers;

use Illuminate\Http\Request;

class webserviceController extends Controller
{
    public function webServ() {
        $id = \Auth::user()->id;
        return view('api_soap/client',compact('id'));
    }
}
