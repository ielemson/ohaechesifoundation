
@push('css')
	<style>
		#website_logo_output{
			height: 60px;
		}
		#website_favicon_output{
			height: 60px;
		}
		.tab-content{
			padding-top: 0;
		}
		.select2-container{
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
          <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        {{-- Title --}}
        <div class="col-md-6">
            <div class="mb-3">
                <label for="title" class="form-label">Event Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $event->title) }}" required>
            </div>
        </div>

        {{-- Status --}}
        <div class="col-md-6">
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="published" {{ $event->status == 'published' ? 'selected' : '' }}>Published</option>
                    <option value="draft" {{ $event->status == 'draft' ? 'selected' : '' }}>Draft</option>
                </select>
            </div>
        </div>

        {{-- Event Banner --}}
        <div class="col-md-6">
            <div class="mb-3">
                <label for="event_banner" class="form-label">Event Banner</label>
                <input type="file" name="event_banner" class="form-control" id="event_banner">
                @if ($event->event_banner)
                    <img src="{{ asset('assets/images/banner/' . $event->event_banner) }}" alt="Current Banner" class="img-thumbnail mt-2" width="200">
                @endif
            </div>
        </div>

        {{-- Event Gallery --}}
        <div class="col-md-6">
            <div class="mb-3">
                <label for="gallery" class="form-label">Gallery Images</label>
                <input type="file" name="gallery[]" class="form-control" id="gallery" multiple>
                
                @php
                    $galleryImages = json_decode($event->gallery, true);
                @endphp

                <div class="row mt-2">
                    @if (!empty($galleryImages))
                        @foreach ($galleryImages as $image)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="{{ asset('assets/images/event_gallery/' . $image) }}" class="card-img-top" alt="Gallery Image">
                                    <div class="card-body">
                                        <p class="card-text">Existing gallery image</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        {{-- Video --}}
        <div class="col-md-12">
            <div class="mb-3">
                <label for="video" class="form-label">Event Video (Optional)</label>
                <input type="file" name="video" class="form-control" id="video" accept="video/mp4,video/webm,video/ogg">
                
                @if ($event->video)
                    <div class="mt-3">
                        <label class="form-label d-block">Current Video:</label>
                        <video width="320" height="240" controls>
                            <source src="{{ asset('assets/videos/event_videos/' . $event->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Content --}}
    <div class="mb-3">
        <label for="content" class="form-label">Event Content</label>
        <textarea name="content" id="summernote" class="form-control summernote" rows="5" required>{{ old('content', $event->content) }}</textarea>
    </div>

    {{-- Submit --}}
    <button type="submit" class="btn btn-primary">Update Event</button>
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
