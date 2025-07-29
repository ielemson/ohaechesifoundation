<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ResizeImage;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    
    public function index(){

        $events = Event::all();
        return view("events.index",compact("events"));
    }

    public function create()
    {
        return view("events.create");
    }

    // public function store(Request $request)
    // {
    //     // dd($request->all());
    //     $request->validate([
    //         'status' => 'required|string|max:255',
    //         'event_banner' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    //         'content' => 'required',
    //         'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    //     ]);

    //     $path = public_path('assets/images/banner/');
    //     $imageBannerPath = "event_banner".'-'.time().uniqid().'.'.$request->event_banner->extension();
    //         ResizeImage::make($request->file('event_banner'))
    //             ->resize(1120, 642)
    //             ->save($path . $imageBannerPath);

    //     $galleryPaths = [];
    //     if ($request->hasFile('gallery')) {
    //         foreach ($request->file('gallery') as $image) {
    //             $name = "image_gallery".'.'.time().rand(1,50).'.'.$image->extension();
    //             $image->move(public_path('assets/images/event_gallery'), $name);  
    //             $galleryPaths[] = $name;
    //         }

    //     Event::create([
    //         'title' => $request->title,
    //         'status' => $request->status,
    //         'slug'=> Str::slug($request->title),
    //         'event_banner' => $imageBannerPath,
    //         'content' => $request->content,
    //         'gallery' => json_encode($galleryPaths),
    //     ]);

    //     }else{
            
    //     Event::create([
    //         'title' => $request->title,
    //         'status' => $request->status,
    //         'slug'=> Str::slug($request->title),
    //         'event_banner' => $imageBannerPath,
    //         'content' => $request->content
    //     ]);

    //     }

    //     return redirect()->route("event.index")->with('success', 'Event created successfully!');
    // }


//     public function store(Request $request)
// {
//     $request->validate([
//         'title' => 'required|string|max:255',
//         'status' => 'required|string|max:255',
//         'event_banner' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
//         'content' => 'required',
//         'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
//         'video' => 'nullable|mimes:mp4,mov,ogg,qt,webm|max:10240' // max 10MB video
//     ]);

//     // === Upload Event Banner ===
//     $bannerPath = public_path('assets/images/banner/');
//     $bannerName = 'event_banner-' . time() . uniqid() . '.' . $request->event_banner->extension();

//     ResizeImage::make($request->file('event_banner'))
//         ->resize(1120, 642)
//         ->save($bannerPath . $bannerName);

//     // === Upload Gallery Images if present ===
//     $galleryPaths = [];
//     if ($request->hasFile('gallery')) {
//         foreach ($request->file('gallery') as $image) {
//             $name = 'image_gallery-' . time() . rand(1, 50) . '.' . $image->extension();
//             $image->move(public_path('assets/images/event_gallery'), $name);
//             $galleryPaths[] = $name;
//         }
//     }

//     // === Upload Video if present ===
//     $videoName = null;
//     if ($request->hasFile('video')) {
//         $video = $request->file('video');
//         $videoName = 'event_video-' . time() . uniqid() . '.' . $video->extension();
//         $video->move(public_path('assets/videos/event_videos'), $videoName);
//     }

//     // === Create Event ===
//     Event::create([
//         'title' => $request->title,
//         'status' => $request->status,
//         'slug' => Str::slug($request->title),
//         'event_banner' => $bannerName,
//         'content' => $request->content,
//         'gallery' => $galleryPaths ? json_encode($galleryPaths) : null,
//         'video' => $videoName, // nullable field
//     ]);

//     return redirect()->route('event.index')->with('success', 'Event created successfully!');
// }

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'event_banner' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'content' => 'required',
        'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'videos.*' => 'nullable|mimes:mp4,webm,ogg|max:51200', // Max 50MB each
    ]);

    // Upload banner
    $bannerPath = public_path('assets/images/banner/');
    $bannerName = 'event_banner_' . time() . '.' . $request->event_banner->extension();
    ResizeImage::make($request->file('event_banner'))->resize(1120, 642)->save($bannerPath . $bannerName);

    // Upload gallery images
    $galleryPaths = [];
    if ($request->hasFile('gallery')) {
        foreach ($request->file('gallery') as $image) {
            $name = 'gallery_' . time() . '_' . uniqid() . '.' . $image->extension();
            $image->move(public_path('assets/images/event_gallery'), $name);
            $galleryPaths[] = $name;
        }
    }

    // Upload multiple videos
    $videoPaths = [];
    if ($request->hasFile('videos')) {
        foreach ($request->file('videos') as $video) {
            $videoName = 'video_' . time() . '_' . uniqid() . '.' . $video->extension();
            $video->move(public_path('assets/videos/event'), $videoName);
            $videoPaths[] = $videoName;
        }
    }

    // Store event
    Event::create([
        'title' => $request->title,
        'status' => $request->status,
        'slug' => Str::slug($request->title),
        'event_banner' => $bannerName,
        'gallery' => json_encode($galleryPaths),
        'videos' => json_encode($videoPaths),
        'content' => $request->content,
    ]);

    return redirect()->route("event.index")->with('success', 'Event created successfully!');
}


    public function edit($id)
{
    $event = Event::where("id",$id)->first();
    // dd($event);
    return view("events.edit", compact('event'));
}

    // public function update(Request $request, $id)
    // {
    //     $event = Event::where("id",$id)->first();
    //     // dd($event);
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'status' => 'required',
    //         'event_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'content' => 'required',
    //         'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //         $imageBannerPath = $event->event_banner;
    //     if ($request->hasFile('event_banner')) {
    //         $imageBannerPath = "event_banner".'-'.time().'.'.$request->event_banner->extension();  
    //         $request->event_banner->move(public_path('assets/images/banner'), $imageBannerPath);
    //     }

    //     // $galleryPaths = $event->gallery;
        
    //     if ($request->hasFile('gallery')) {
    //         $galleryPaths = [];
    //         foreach ($request->file('gallery') as $image) {
    //             $name = "image_gallery".'.'.time().rand(1,50).'.'.$image->extension();
    //             $image->move(public_path('assets/images/event_gallery'), $name);  
    //             $galleryPaths[] = $name;
    //         }

    //         $event->update([
    //             'title' => $request->title,
    //             'status' => $request->status,
    //             // 'meta_title' => $request->meta_title,
    //             // 'meta_keywords' => $request->meta_keywords,
    //             // 'meta_description' => $request->meta_description,
    //             'slug' => Str::slug($request->title),
    //             // 'location' => $request->location,
    //             'event_banner' => $imageBannerPath,
    //             'content' => $request->content,
    //             'gallery' => json_encode($galleryPaths),
    //         ]);
    //     }else{
    //         $event->update([
    //             'title' => $request->title,
    //             'status' => $request->status,
    //             // 'meta_title' => $request->meta_title,
    //             // 'meta_keywords' => $request->meta_keywords,
    //             // 'meta_description' => $request->meta_description,
    //             'slug' => Str::slug($request->title),
    //             // 'location' => $request->location,
    //             'event_banner' => $imageBannerPath,
    //             'content' => $request->content,
    //         ]);
    //     }

     

    //     return redirect()->route("event.index")->with('success', 'Event updated successfully!');
    // }

    public function update(Request $request, $id)
{
    $event = Event::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'event_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'content' => 'required',
        'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        'video' => 'nullable|mimes:mp4,mov,ogg,qt,webm|max:10240', // Optional video
    ]);

    // === Event Banner ===
    $bannerPath = $event->event_banner;
    if ($request->hasFile('event_banner')) {
        $bannerName = 'event_banner-' . time() . uniqid() . '.' . $request->event_banner->extension();
        $request->event_banner->move(public_path('assets/images/banner'), $bannerName);
        $bannerPath = $bannerName;
    }

    // === Gallery Images ===
    $galleryPaths = json_decode($event->gallery ?? '[]', true); // Preserve existing if none uploaded
    if ($request->hasFile('gallery')) {
        $galleryPaths = []; // Overwrite with new ones
        foreach ($request->file('gallery') as $image) {
            $name = 'image_gallery-' . time() . rand(1, 100) . '.' . $image->extension();
            $image->move(public_path('assets/images/event_gallery'), $name);
            $galleryPaths[] = $name;
        }
    }

    // === Event Video ===
    $videoPath = $event->video;
    if ($request->hasFile('video')) {
        $videoName = 'event_video-' . time() . uniqid() . '.' . $request->video->extension();
        $request->video->move(public_path('assets/videos/event_videos'), $videoName);
        $videoPath = $videoName;
    }

    // === Update Event ===
    $event->update([
        'title' => $request->title,
        'status' => $request->status,
        'slug' => Str::slug($request->title),
        'event_banner' => $bannerPath,
        'content' => $request->content,
        'gallery' => $galleryPaths ? json_encode($galleryPaths) : null,
        'video' => $videoPath,
    ]);

    return redirect()->route('event.index')->with('success', 'Event updated successfully!');
}


    public function destroy($id)
    {
        $event = Event::where("id",$id)->first();
        $image_path = public_path('assets/images/banner/'.$event->event_banner);
        if(File::exists($image_path)) {
            File::delete($image_path);
          }
        if ($event->gallery) {
            $galleryImages = json_decode($event->gallery, true);
            foreach ($galleryImages as $image) {
                File::delete(public_path('assets/images/event_gallery/'.$image));
            }
        }

        $event->delete();

        return redirect()->route("event.index")->with('success', 'Event deleted successfully!');
    }
}
