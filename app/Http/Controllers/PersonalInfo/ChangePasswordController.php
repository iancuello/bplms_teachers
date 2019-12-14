<?php

namespace App\Http\Controllers\personalinfo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
// use Carbon\Carbon;

class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //Auth::user()->password))    
        //$teachers_profile = TeachersProfile::getTeachersProfileByid(auth()->user()->id)->first();           
        //return view('personalinfo.profile', compact('countries', 'teachers_profile'));  

        return view('personalinfo.changepassword');  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
         
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()
                             ->with("password-error","Your current password does not matches with the password you provided. <br>Please try again.")
                             ->with("tabpanel","Change Password")
                             ->withInput();
        }

        $validator = Validator::make($request->all(), [
            'current_password' => 'required',     
            'new_password' => 'required|string|min:6|different:currentpassword|same:new_password_confirm',            
            'new_password_confirm' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                                ->withErrors($validator)
                                ->with('tabpanel', 'Change Password')
                                ->withInput();
        } 

        
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('newpassword'));
        $user->save();

        return redirect()->back()
                       ->with('tabpanel', 'Change Password')
                       ->withInput();

        // return redirect()->back()->with("success","Password changed successfully !");                       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
