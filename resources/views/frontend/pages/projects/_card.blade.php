<!-- begin card {{ $project['slug'] }} -->
<div class="card">
    <img class="card-img-top img-fluid" src="{{ $project['image'] }}" alt="{{ $project['title'] }} Project">
    <div class="card-img-overlay">
        <h4 class="card-title-dark text-center">{{ $project['title'] }}</h4>
    </div>
    <div class="card-block">
        <p class="card-text">{{ $project['description'] }}</p>
        @include('frontend.pages.projects._meta')
    </div>
    @isset($project['details'])
        <div class="card-footer">
            <a href="#dialog-{{ $project['slug'] }}" data-toggle="modal" class="btn btn-theme btn-sm btn-block">Mostra dettagli</a>
        </div>
    @endisset
</div>
<!-- end card {{ $project['slug'] }} -->

@isset($project['details'])
    @include('frontend.pages.projects._modal')
@endisset
