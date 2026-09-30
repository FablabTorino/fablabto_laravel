<!-- start documentation {{ $project['slug'] }} -->
<div class="modal fade modal-project" id="dialog-{{ $project['slug'] }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ $project['title'] }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                @if(count($project['images']) > 1)
                    @include('frontend.pages.projects._gallery')
                @else
                    <img class="img-fluid mb-3" src="{{ $project['image'] }}" alt="{{ $project['title'] }}">
                @endif
                @include('frontend.pages.projects._meta')
                @include($project['details'])
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Chiudi</a>
                @isset($project['url'])
                    <a href="{{ $project['url'] }}" target="_blank" class="btn btn-theme">Vai al progetto</a>
                @endisset
            </div>
        </div>
    </div>
</div>
<!-- end documentation {{ $project['slug'] }} -->
