
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
            <form action="{{ route('event.update', $event->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title"
                                value="{{ $event->title }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="type" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="published" {{ $event->status == 'published' ? 'selected' : '' }}>
                                    Published</option>
                                <option value="draft" {{ $event->status == 'draft' ? 'selected' : '' }}>Draft
                                </option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="event_banner" class="form-label">Image Banner</label>
                            <input type="file" name="event_banner" class="form-control" id="event_banner">
                            <img src="{{ asset('assets/images/banner/' . $event->event_banner) }}"
                                alt="Current Banner" class="img-thumbnail mt-2" width="200">
                        </div>
                    </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="gallery" class="form-label">Gallery</label>
                        <input type="file" name="gallery[]" class="form-control" id="gallery" multiple>
                        @php
                            $galleryImages = json_decode($event->gallery, true);
                        @endphp
                        <div class="row mt-10">
                            @if ($galleryImages !== null)
                                @foreach ($galleryImages as $image)
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img src="{{ asset('assets/images/gallery/' . $image) }}"
                                                class="card-img-top" alt="Gallery Image">
                                            <div class="card-body">
                                                <p class="card-text">Image from the event gallery.</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                </div>
        
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" class="form-control" id="summernote" rows="5" required>{{ $event->content }}</textarea>
                </div>
        
              
        
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection
