<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{

    public function post(Request $request)
    {
        $data = $request->all();
        
        
    

        Mail::to('93.andreasgura@gmail.com')->send(new NewContact($data));
    }
}
