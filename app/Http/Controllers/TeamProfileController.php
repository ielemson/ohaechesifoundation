<?php

// app/Http/Controllers/TeamProfileController.php
namespace App\Http\Controllers;

use App\Models\TeamProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ResizeImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TeamProfileController extends Controller
{
    public function index()
    {
        $profiles = TeamProfile::all();
        return view("team.index", compact('profiles'));
    }

    public function create()
    {
        return view('team.edit');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'about' => 'nullable|string',
            'status' => 'required|in:active,suspended',
            'position' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
        ]);

        if ($request->hasFile('picture')) {
            // $data['picture'] = $request->file('picture')->store('team', 'public');
            $path = public_path('assets/images/team/');
            $imageBannerPath = Str::slug($request->name).'-'.time().uniqid().'.'.$request->picture->extension();
                ResizeImage::make($request->file('picture'))
                    ->resize(370, 451)
                    ->save($path . $imageBannerPath);
                    $data['picture']  = $imageBannerPath;
        }
        $data['slug']  = Str::slug($request->name);
        TeamProfile::create($data);

        return redirect()->route('team_profiles.index')->with('success', 'Profile created successfully.');
    }

    public function edit(TeamProfile $teamProfile)
    {
        return view('team.edit', compact('teamProfile'));
    }

    public function update(Request $request, TeamProfile $teamProfile)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'about' => 'nullable|string',
            'status' => 'required|in:active,suspended',
            'position' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
        ]);

        if ($request->hasFile('picture')) {
            // if ($teamProfile->picture) {
            //     Storage::disk('public')->delete($teamProfile->picture);
            // }
            // $data['picture'] = $request->file('picture')->store('team', 'public');

            $path = public_path('assets/images/team/');
            $imageBannerPath = Str::slug($request->name).'-'.time().uniqid().'.'.$request->picture->extension();
                ResizeImage::make($request->file('picture'))
                    ->resize(370, 451)
                    ->save($path . $imageBannerPath);
                    $data['picture']  = $imageBannerPath;
        }

        $data['slug']  =  Str::slug($request->name);
        $teamProfile->update($data);

        return redirect()->route('team_profiles.index')->with('success', 'Profile updated successfully.');
    }

    public function destroy($id)
    {
        $teamProfile = TeamProfile::where("id",$id)->first();
        $image_path = public_path('assets/images/team/'.$teamProfile->picture);
        if(File::exists($image_path)) {
            File::delete($image_path);
          }
        $teamProfile->delete();

        return redirect()->route("team_profiles.index")->with('success', 'Profile deleted successfully.');
    }
}

