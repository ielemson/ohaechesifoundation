@extends('layouts.admin')

@section('title')
Team
@endsection
@section('content')
<ul>
   <div class="row">
    <div class="col-md-12">
        <a href="{{ route("team_profiles.create") }}">Create Team</a>
       @if (count($profiles)>0)
       <h5 class="mb-4">{{ __('Profile Card')}}</h5>
       <div class="row">
           <div class="row mt-4">
               @foreach ($profiles as $team)
                   <div class="col-md-4">
                       <div class="card mb-3">
                           @if ($team->picture)
                               <img src="{{ asset('assets/images/team/' .$team->picture) }}" class="card-img-top" alt="{{ $team->name }}">
                           @endif
                           <div class="card-body">
                               <h5 class="card-title">{{ $team->name }}</h5>
                               <p class="card-text">{!! substr($team->about , 0, 100) !!}</p>
                               <p class="card-text"><strong>Status:</strong> {{ ucfirst($team->status) }}</p>
                               <a href="{{ route("team_profiles.edit", $team->id) }}" class="btn btn-warning">Edit</a>
                               <form action="{{ route("team_profiles.destroy", $team->id) }}" method="POST" class="d-inline">
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit" class="btn btn-danger">Delete</button>
                               </form>
                           </div>
                       </div>
                   </div>
               @endforeach
           </div>
          
       </div>
       @else
           No Team Profile
           <a href="{{ route("team_profiles.create") }}" class="btn btn-danger">Crate New Team</a>
       @endif

    </div>
</div>
</ul>
@endsection
