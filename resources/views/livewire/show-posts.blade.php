<div>
    @foreach($posts as $post)
        <div
            wire:key="{{ $post->id }}" class="card mb-3"
        >
            <div class="card-body">
                <h5 class="card-title">
                    {{ $post->title }}
                </h5>

                <p class="card-text">
                    {{ $post->content }}
                </p>

                <p class="card-text">
                    <small class="text-muted">
                        {{ $post->created_at->diffForHumans() }}
                    </small>
                </p>
            </div>
        </div>

    @endforeach
</div>
