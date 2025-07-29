
@extends('layouts.admin')

@section('title')
Gallery Items
@endsection

@section('content')
<section class="content">
     
    <div class="row">
        <div class="col-md-12">
           
        <a href="{{ route('gallery.create') }}" class="btn btn-primary mb-3">Add New Media</a>

    <div class="row">
        @forelse($items as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($item->type === 'image')
                        <img src="{{ asset('assets/images/' . $item->file_path) }}" class="card-img-top" alt="">
                    @else
                        <video controls width="100%">
                            <source src="{{ asset('assets/videos/' . $item->file_path) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title ?? 'Untitled' }}</h5>
                        <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('gallery.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this item?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p>No media uploaded yet.</p>
        @endforelse
    </div>

        </div>
    </div>
</section>
@endsection
