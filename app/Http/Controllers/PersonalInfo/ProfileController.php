<?php

namespace App\Http\Controllers\PersonalInfo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Country;
use App\TeachersProfile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::OrderByName()->get();                        
        $teachers_profile = TeachersProfile::getTeachersProfileByid(auth()->user()->id)->first();           
        return view('personalinfo.profile', compact('countries', 'teachers_profile'));  
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
        // 'avatar' => 'sometimes|file|image|nullable|max:1999',
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:190',
            'lastname' => 'required|string|max:190',
            'birthdate' => 'required|date',
            'country' => 'required|integer',
            
        ]);

        if ($validator->fails()) {
            return redirect('/profile')
                        ->withErrors($validator)
                        ->withInput();
        }

           
        $teachers_profile = TeachersProfile::getTeachersProfileByid(auth()->user()->id)->first();      
        if (!empty($teachers_profile)) {
            $filename = $teachers_profile->avatar;
            if($teachers_profile->avatar != 'default.png') { 
                Storage::delete('storage/avatar/' . $teachers_profile->avatar);
            }
        }

        if($request->hasFile('avatar')) {
            $filenameExt = $request-> file('avatar')->getClientOriginalName();
            //$filename = pathinfo($filenameExt,PATHINFO_FILENAME);
            $Ext = $request-> file('avatar')->getClientOriginalExtension();
            $filename =  auth()->user()->id . '.' . $Ext;
            $path = $request->file('avatar')->storeAs('public/avatar',$filename);
            $image = Image::make(public_path('storage/avatar/'. $filename))->fit(300,300);
            $image->save();
        } 

        $user = TeachersProfile::updateOrCreate([
            'usersid' => auth()->user()->id
        ], [
            'firstName' => $request->input('firstname'),
            'middlename' => $request->input('middlename'),
            'lastname' => $request->input('lastname'),
            'gender' => $request->input('gender'),
            'birthdate' => Carbon::parse($request->input('birthdate')),
            'address' => $request->input('address'),
            'countryid' => $request->input('country'),
            'contactno' => $request->input('contactno'),
            'avatar' => $filename,
        ]);
        
        return redirect('/profile')->with('tabpanel', 'Profile');

        //TeachersProfile::create($validator);
        // $teacher = new TeachersProfile;
        // $teacher->usersid  = auth()->user()->id;
        // $teacher->firstname  = $request->input('firstname');
        // $teacher->middlename  = $request->input('middlename');
        // $teacher->lastname  = $request->input('lastname');
        
        // $teacher->gender  = $request->input('gender');
        // $teacher->birthdate  = Carbon::parse($request->input('birthdate'));
        // $teacher->address  = $request->input('address');
        // $teacher->countryid  = $request->input('country');
        // $teacher->contactno  = $request->input('contactno');
        // $teacher->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        
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
