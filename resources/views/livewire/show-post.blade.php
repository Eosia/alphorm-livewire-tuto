<div class="container">
    <h1>
        {{ $post->title }}
    </h1>

    <p>{{ $post->content }}</p>

    {{ $post->created_at->diffForHumans() }} - {{ $post->user->name }}
</div>
