@push('css')
    <style>
        #website_logo_output {
            height: 60px;
        }

        #website_favicon_output {
            height: 60px;
        }

        .tab-content {
            padding-top: 0;
        }

        .select2-container {
            width: 100% !important;
        }
    </style>
@endpush

@extends('layouts.admin')

@section('title')
    Create Event
@endsection

@section('content')
    <section class="content">
        <div class="card">

            <div class="card-body">
                <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="event title" value="{{ old('title') }}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="type" class="form-label">Status</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="Published">Published</option>
                                    <option value="Draft">Draft</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="event_banner" class="form-label">Event Banner</label>
                                <input type="file" name="event_banner" class="form-control" id="event_banner" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gallery">Event Gallery</label>
                                <input type="file" name="gallery[]"
                                    class="form-control @error('gallery') is-invalid @enderror" id="gallery" multiple>
                                @error('gallery')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            {{-- Video (optional) --}}
                            <div class="mb-3">
                                <label for="video" class="form-label">Event Video (optional)</label>
                                <input type="file" name="video" class="form-control" id="video"
                                    accept="video/mp4,video/webm,video/ogg">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" class="form-control summernote" id="summernote" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
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
