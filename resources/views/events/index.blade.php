
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
     
    <div class="row">
        <div class="col-md-12">
           
           @if (count($events)>0)
           <h5 class="mb-4">{{ __('Event Card')}}</h5>
           <div class="row">
               <div class="row mt-4">
                   @foreach ($events as $event)
                       <div class="col-md-4">
                           <div class="card mb-3">
                               @if ($event->event_banner)
                                   <img src="{{ asset('assets/images/banner/' .$event->event_banner) }}" class="card-img-top" alt="{{ $event->name }}">
                               @endif
                               <div class="card-body">
                                   <h5 class="card-title">{{ $event->title }}</h5>
                                   <p class="card-text">{!! substr($event->content , 0, 100) !!}</p>
                                   <p class="card-text"><strong>Status:</strong> {{ ucfirst($event->status) }}</p>
                                   <a href="{{ route("event.edit", $event->id) }}" class="btn btn-warning">Edit</a>
                                   <form action="{{ route("event.destroy", $event->id) }}" method="POST" class="d-inline">
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
               No event so far
           @endif

        </div>
    </div>
</section>
@endsection
