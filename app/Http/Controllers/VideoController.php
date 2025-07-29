<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->get();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'video' => 'required|mimes:mp4,webm,ogg|max:51200', // 50MB
        ]);

        $file = $request->file('video');
        $filename = 'video_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/videos'), $filename);

        Video::create([
            'title' => $request->title,
            'video_path' => $filename,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video uploaded successfully.');
    }

    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'video' => 'nullable|mimes:mp4,webm,ogg|max:51200',
        ]);

        $data = ['title' => $request->title];

        if ($request->hasFile('video')) {
            if (file_exists(public_path('assets/videos/' . $video->video_path))) {
                unlink(public_path('assets/videos/' . $video->video_path));
            }

            $filename = 'video_' . time() . '.' . $request->video->extension();
            $request->video->move(public_path('assets/videos'), $filename);
            $data['video_path'] = $filename;
        }

        $video->update($data);

        return redirect()->route('videos.index')->with('success', 'Video updated successfully.');
    }

    public function destroy(Video $video)
    {
        if (file_exists(public_path('assets/videos/' . $video->video_path))) {
            unlink(public_path('assets/videos/' . $video->video_path));
        }

        $video->delete();

        return redirect()->back()->with('success', 'Video deleted.');
    }
}