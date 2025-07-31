

@extends('layouts.admin')

@section('title')
    Create Gallery
@endsection

@section('content')
    <section class="content">
        <div class="card">

            <div class="card-body">
            <form action="{{ route('gallery.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $item->title }}">
        </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" value="{{ $item->location }}">
        </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="file">Replace File (optional)</label>
            <input type="file" name="file" class="form-control">
        </div>

        @if($item->type === 'image')
            <img src="{{ asset('assets/images/' . $item->file_path) }}" width="200" class="img-thumbnail">
        @else
            <video controls width="300">
                <source src="{{ asset('assets/videos/' . $item->file_path) }}">
            </video>
        @endif

        <button class="btn btn-primary mt-3">Update</button>
        <a href="{{ route('gallery.index') }}" class="btn btn-secondary mt-3">Cancel</a>
    </form>
            </div>
        </div>
    </section>
@endsection

@push('js_app')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('.summernote').summernote({
            placeholder: 'Please ensure to paste from MS word, Notepad. Avoid pasting directly from other websites.',
            tabsize: 2,
            height: 150,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endpush
