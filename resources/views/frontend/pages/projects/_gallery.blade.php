{{-- Slideshow of the photos of a project, shown in its modal when it has more than one --}}
<!-- begin gallery {{ $project['slug'] }} -->
<div id="gallery-{{ $project['slug'] }}" class="carousel slide project-gallery mb-3" data-interval="false">
    <ol class="carousel-indicators">
        @foreach($project['images'] as $image)
            <li data-target="#gallery-{{ $project['slug'] }}" data-slide-to="{{ $loop->index }}" @if($loop->first) class="active" @endif></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($project['images'] as $image)
            <div class="carousel-item @if($loop->first) active @endif">
                <img src="{{ $image }}" alt="{{ $project['title'] }} - foto {{ $loop->iteration }}">
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#gallery-{{ $project['slug'] }}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Foto precedente</span>
    </a>
    <a class="carousel-control-next" href="#gallery-{{ $project['slug'] }}" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Foto successiva</span>
    </a>
</div>
<!-- end gallery {{ $project['slug'] }} -->
