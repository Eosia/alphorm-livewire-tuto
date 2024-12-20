<div class="container">
    <div class="row">

        <h1 class="text-center mx-auto mb-5">
            {{ $title }}
        </h1>

        {{--    <livewire:sales  lazy/>--}}

{{--        <input type="text" wire:model.search.live.debounce="search"--}}
{{--               class="form-control my-5 mx-auto text-center" placeholder="Rechercher..."--}}
{{--        >--}}

        <form wire:submit="searchPosts" class="mb-4">
            <div class="row">
                <div class="col-4">
                    <input type="text" wire:model="search" class="form-control" placeholder="Rechercher...">
                </div>
            </div>
            <button type="submit" class="d-none">
                Rechercher
            </button>
        </form>

        @if($search)
            Résultats de recherche pour: {{ $search }}
        @endif

        @foreach($posts as $post)

            @livewire('post-item', ['post'=> $post], key($post->id))

        @endforeach

        <div class="mx-auto text-center">
            {{ $posts->links() }}
        </div>

    </div>
</div>
