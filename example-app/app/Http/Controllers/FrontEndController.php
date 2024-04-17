<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;                                                     

class FrontEndController extends Controller
{
    public function homePage()
    {
        $users=user::all();
        $u=user::find(3);
        $us=user::active()->orderby('user_id','DESC')->limit(10)->latest()->get();
       
       
        
        return view('welcome',compact('us'));
    }

    public function create()
    {
        return view('users.create');
    }
    public function save()
    {
        // user::create([
        //     'first_name'=> request('name'),
        //     'email'=> request('email'),
        //     'date_of_birth'=> request('dob'),
        //     'status'=> request('status'),
        // ]);

        // $user=user::firstOrCreate([
        //     'email'=> request('email')  // check duplicate if not create(email)
        // ],[

        //     'first_name'=> request('name'),
        //     'date_of_birth'=> request('dob'),
        //     'status'=> request('status'),
        // ]);


              $user=user::updateOrCreate([
            'email'=> request('email')
        ],[

            'first_name'=> request('name'),   // check duplicate then update or  if not create(email)
            'date_of_birth'=> request('dob'), 
            'status'=> request('status'),
        ]);

        return redirect()->route('home')->with('message','user created sucessfully !!!!');
                return $user;
        return '1 row inserted';
    }
}
