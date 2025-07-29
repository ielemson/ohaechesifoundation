<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Http\Request;

class GalleryItemController extends Controller
{
    public function index()
    {
        $items = GalleryItem::latest()->get();
        return view('gallery.index', compact('items'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'file' => 'required|file|mimes:jpeg,png,jpg,mp4,webm,ogg|max:51200', // 50MB max
        ]);

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $type = in_array($extension, ['mp4', 'webm', 'ogg']) ? 'video' : 'image';

        $filename = time() . '-' . uniqid() . '.' . $extension;
        $directory = $type === 'video' ? 'assets/videos' : 'assets/images';
        $file->move(public_path($directory), $filename);

        GalleryItem::create([
            'title' => $request->title,
            'type' => $type,
            'file_path' => $filename,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Media uploaded successfully.');
    }

    public function edit(GalleryItem $gallery)
    {
        return view('gallery.edit', ['item' => $gallery]);
    }

    public function update(Request $request, GalleryItem $gallery)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'file' => 'nullable|file|mimes:jpeg,png,jpg,mp4,webm,ogg|max:51200',
        ]);

        $data = ['title' => $request->title];

        if ($request->hasFile('file')) {
            // Delete old file
            $oldPath = $gallery->type === 'video'
                ? public_path('assets/videos/' . $gallery->file_path)
                : public_path('assets/images/' . $gallery->file_path);
            if (file_exists($oldPath)) unlink($oldPath);

            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $type = in_array($extension, ['mp4', 'webm', 'ogg']) ? 'video' : 'image';
            $filename = time() . '-' . uniqid() . '.' . $extension;
            $directory = $type === 'video' ? 'assets/videos' : 'assets/images';
            $file->move(public_path($directory), $filename);

            $data['type'] = $type;
            $data['file_path'] = $filename;
        }

        $gallery->update($data);

        return redirect()->route('gallery.index')->with('success', 'Media updated successfully.');
    }

    public function destroy(GalleryItem $gallery)
    {
        $filePath = $gallery->type === 'video'
            ? public_path('assets/videos/' . $gallery->file_path)
            : public_path('assets/images/' . $gallery->file_path);

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Media deleted.');
    }
}