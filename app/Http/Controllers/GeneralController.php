<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\GalleryItem;
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
        $events = Event::where("status","published")->latest('id')->get();
         $galleryItems = GalleryItem::latest()->get();
        //  dd($galleryItems);
        return view("ohaechesi.welcome",compact("teams","events","galleryItems"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactus()
    {
        return view("ohaechesi.contactus");
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
        return view("ohaechesi.about_us",compact("teams"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function donatenow()
    {
        return view("ohaechesi.donation");
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
        return view("ohaechesi.team_details",compact("teamprofile"));
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
    public function eventdetails($slug)
    {
       $event = Event::where("slug",$slug)->first();
       $events = Event::where("status","published")->latest()->inRandomOrder()->take(5)->get();
       return view("frontend.event",compact("event","events"));

    }
}
