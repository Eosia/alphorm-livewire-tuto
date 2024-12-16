<div class="container">
    <div class="card mb-3">
        <div class="card-body">

            <a href="{{ route('post.show', $post->id) }}">
                <h5 class="card-title">
                    {{ $post->title }}
                </h5>
            </a>


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
</div>
