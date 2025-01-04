
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
            <form action="{{ route("event.store") }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="event title" value="{{ old('title') }}" required>
                </div>
        
                    </div>
                  
                        <div class="col-md-6"> <div class="mb-3">
                            <label for="type" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="Published">Published</option>
                                <option value="Draft">Draft</option>
                            </select>
                        </div></div>
                    
                    <div class="col-md-6"> <div class="mb-3">
                        <label for="event_banner" class="form-label">Event Banner</label>
                        <input type="file" name="event_banner" class="form-control" id="event_banner" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gallery">Event Gallery</label>
                        <input type="file" name="gallery[]"
                            class="form-control @error('gallery') is-invalid @enderror"
                            id="gallery" multiple>
                        @error('gallery')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                </div>
               
               <div class="row">
              

                {{-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="meta_keywords">Meta Keywords</label>
                        <input type="text" name="meta_keywords"
                            placeholder="Meta Keywords"
                            class="form-control @error('meta_keywords') is-invalid @enderror"
                            id="meta_keywords" value="{{ old('meta_keywords') }}">
                        @error('meta_keywords')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <input type="text" name="meta_description"
                            placeholder="Meta Description"
                            class="form-control @error('meta_description') is-invalid @enderror"
                            id="meta_description" value="{{ old('meta_description') }}">
                        @error('meta_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> --}}
                
               </div>
        
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" class="form-control" id="summernote" rows="5" required></textarea>
                </div>
        
              
        
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection
