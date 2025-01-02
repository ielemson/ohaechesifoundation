<?php

namespace App\Http\Controllers;

use App\Models\TeamProfile;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = TeamProfile::where("status","active")->get();
        return view("frontend.welcome",compact("teams"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactus()
    {
        return view("frontend.contactus");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aboutus()
    {
        $teams = TeamProfile::where("status","active")->get();
        return view("frontend.aboutus",compact("teams"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function donatenow()
    {
        return view("frontend.donatenow");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function singleteam($slug)
    {
        $teamprofile  = TeamProfile::where("slug",$slug)->first();
        return view("frontend.team_profile",compact("teamprofile"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ourprograms()
    {
        return view("frontend.ourprograms");
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
