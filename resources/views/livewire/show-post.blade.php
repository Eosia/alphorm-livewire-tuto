<div class="container">
    <h1>
        {{ $post->title }}
    </h1>

    <p>{{ $post->content }}</p>

    {{ $post->created_at->diffForHumans() }} - {{ $post->user->name }}

    <br>

    <a href="{{ route('posts') }}" wire:navigate.hover class="btn btn-md btn-primary mt-5">
        < Retour
    </a>
</div>
