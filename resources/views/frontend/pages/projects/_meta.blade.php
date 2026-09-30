{{-- Tags, authors and dates of a project: only the fields that are set are shown --}}
@if(!empty($project['tags']) || !empty($project['authors']) || isset($project['created']) || isset($project['updated']))
    <div class="project-meta">
        @if(!empty($project['tags']))
            <div class="project-tags">
                @foreach($project['tags'] as $tag)
                    <span class="badge">{{ $tag }}</span>
                @endforeach
            </div>
        @endif

        @if(!empty($project['authors']))
            <div><i class="fas fa-users fa-fw"></i> {{ implode(', ', $project['authors']) }}</div>
        @endif

        @if(isset($project['created']) || isset($project['updated']))
            <div>
                <i class="fas fa-calendar-alt fa-fw"></i>
                @isset($project['created'])
                    {{ \Carbon\Carbon::parse($project['created'])->locale('it')->isoFormat('MMM YYYY') }}
                @endisset
                @if(isset($project['updated']) && $project['updated'] !== ($project['created'] ?? null))
                    @isset($project['created']) &middot; @endisset
                    aggiornato {{ \Carbon\Carbon::parse($project['updated'])->locale('it')->isoFormat('MMM YYYY') }}
                @endif
            </div>
        @endif
    </div>
@endif
