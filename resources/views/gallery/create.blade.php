

@extends('layouts.admin')

@section('title')
    Create Gallery
@endsection

@section('content')
    <section class="content">
        <div class="card">

            <div class="card-body">
              <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title (optional)</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="file" class="form-label">Upload Image or Video</label>
            <input type="file" name="file" class="form-control" required>
            <small class="text-muted">Image: jpeg, png, jpg | Video: mp4, webm, ogg | Max: 50MB</small>
        </div>

        <button type="submit" class="btn btn-success">Upload</button>
        <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Back</a>
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
