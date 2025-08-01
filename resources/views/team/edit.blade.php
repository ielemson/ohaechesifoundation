@extends('layouts.admin')

@section('title')
Team
@endsection
@section('content')
<h1>{{ isset($teamProfile) ? 'Edit' : 'Add' }} Team Profile</h1>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h4>Crate Team Profile</h4>
        </div>
        <div class="card-body">
            <div>
                <div>
                    <form class="form-horizontal" action="{{ isset($teamProfile) ? route('team_profiles.update', $teamProfile) : route('team_profiles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($teamProfile) @method('PUT') @endisset
                    
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="{{ old('name', $teamProfile->name ?? '') }}" class="form-control @error('name') is-invalid @enderror" required>
                    
                        <label for="about">About:</label>
                        <textarea name="about" class="form-control summernote @error('about') is-invalid @enderror">{{ old('about', $teamProfile->about ?? '') }}</textarea>
                    
                       <div class="row">
                        <div class="col-md-6">
                            <label for="name">Position:</label>
                            <input type="text" name="position" value="{{ old('position', $teamProfile->position ?? '') }}" class="form-control @error('position') is-invalid @enderror" required>
                        
                        </div>

                        <div class="col-md-6">
                            <label for="status">Status:</label>
                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                <option value="active" {{ old('status', $teamProfile->status ?? '') == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="suspended" {{ old('status', $teamProfile->status ?? '') == 'suspended' ? 'selected' : '' }}>Suspended</option>
                            </select>
                        </div>
                       </div>
                    
                        <label for="picture">Picture:</label>
                        <input type="file" name="picture" class="form-control @error('picture') is-invalid @enderror">
                        @isset($teamProfile->picture)
                            <img src="{{ asset('assets/images/team/' .$teamProfile->picture) }}" alt="Profile Picture" width="100" class="mt-2 thumbnail">
                        @endisset
                    
                     <div class="row mt-2">
                        <div class="col-md-4 col-sm-12">
                            <label for="facebook">Facebook:</label>
                            <input type="url" name="facebook" value="{{ old('facebook', $teamProfile->facebook ?? '') }}" class="form-control @error('facebook') is-invalid @enderror">
                        
                        </div>
                        <div class="col-md-4 col-sm-12">
                            
                            <label for="instagram">Instagram:</label>
                            <input type="url" name="instagram" value="{{ old('instagram', $teamProfile->instagram ?? '') }}" class="form-control @error('instagram') is-invalid @enderror">
                        
                          
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="twitter">Twitter:</label>
                            <input type="url" name="twitter" value="{{ old('twitter', $teamProfile->twitter ?? '') }}" class="form-control @error('twitter') is-invalid @enderror">
                        
                        </div>
                     </div>
                        <button type="submit" class="btn btn-primary btn-md mt-2">{{ isset($teamProfile) ? 'Update' : 'Add' }} Profile</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

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

@endsection



