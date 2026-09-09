<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyEasyStoreController extends Controller
{
     public function index()
    {
        return view('myeasystore');
    }


    public function store(Request $request)
    {
        // Validation rules
        // $request->validate([
        //     'username'   => 'required|min:4|max:35|alpha_num',
        //     'store_name' => 'required|string|min:3',
        //     'flat'       => 'required|string',
        //     'address'    => 'required|string|min:5',
        //     'owner_name' => 'required|string|min:4',
        //     'phone'      => 'required|digits:10',
        //     'email'      => 'required|email',
        //     'terms'      => 'accepted',
        // ]);

        // Normally you would save to DB here
        // For now just return success message
        return back()->with('success', 'Store created successfully!');
    }

    public function showForm()
    {
        return view('storeform');
    }

 public function about()
    {
        return view('about');
    }

     public function features()
    {
        return view('features');
    }


     public function pricing()
    {
        return view('pricing');
    }
}
