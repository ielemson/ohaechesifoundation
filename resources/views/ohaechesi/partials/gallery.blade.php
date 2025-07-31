<section class="about-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-xl-7 mx-auto">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-45">
                    <h2 class="title font-700">Our Media</h2>
                    <p class="pera">Welcome to our media gallery a window into the heart of our mission. Through these photos and videos, we share the real-life stories of hope, change, and empowerment made possible by your support.</p>
                </div>
            </div>
        </div>
     @if ($galleryItems->count())
        <div class="row g-4">
            @foreach ($galleryItems as $item)
                <div class="col-lg-6 col-md-6">
                    <div class="card shadow-sm border-0 h-100 rounded-4">
                        @if ($item->type === 'image')
                            <img src="{{ asset('assets/images/' . $item->file_path) }}" 
                                 class="card-img-top rounded-top-4" 
                                 alt="{{ $item->title ?? 'Media Image' }}">
                        @elseif ($item->type === 'video')
                        <div class="ratio ratio-16x9">
                            <video class="card-img-top rounded-top-4 " controls>
                                <source src="{{ asset('assets/videos/' . $item->file_path) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        @endif

                        <div class="card-body">
                            <div class="d-flex justify-content-between text-muted small mb-2">
                                <div>
                                    <i class="bi bi-clock me-1"></i> {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                                </div>
                                <div>
                                    <i class="bi bi-geo-alt me-1"></i> {{ $item->location ?? 'Unknown' }}
                                </div>
                            </div>

                            <h5 class="card-title fw-bold mb-3">{{ $item->title ?? 'Untitled' }}</h5>

                           
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info text-center mt-4">No media uploaded yet.</div>
    @endif
</div>
        </div>
      </section>