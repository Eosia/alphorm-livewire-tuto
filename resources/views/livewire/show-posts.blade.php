<div class="row">

    <h1 class="text-center mx-auto mb-5">
        {{ $title }}
    </h1>

    <livewire:sales  lazy/>

    @foreach($posts as $post)

        @livewire('post-item', ['post'=> $post], key($post->id))

{{--        <livewire:post-item :post="$post" :key="$post->id" />--}}



{{--        <div--}}
{{--            wire:key="{{ $post->id }}" class="card mb-3"--}}
{{--        >--}}
{{--            <div class="card-body">--}}
{{--                <a href="{{ route('post.show', $post->id) }}">--}}
{{--                    <h5 class="card-title">--}}
{{--                        {{ $post->title }}--}}
{{--                    </h5>--}}
{{--                </a>--}}

{{--                <p class="card-text">--}}
{{--                    {{ $post->content }}--}}
{{--                </p>--}}

{{--                <p class="card-text">--}}
{{--                    <small class="text-muted">--}}
{{--                        {{ $post->created_at->diffForHumans() }}--}}
{{--                    </small>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}


    @endforeach
</div>
