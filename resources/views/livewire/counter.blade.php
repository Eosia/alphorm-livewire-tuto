<div class="container-fluid text-center mx-auto">
    <h2>{{ $count }}</h2>

    <button class="btn btn-md btn-outline-primary"
        wire:click="increment"
    >
        +
    </button>

    <button class="btn btn-md btn-outline-secondary"
            wire:click="decrement"
    >
    -
    </button>


    <button class="btn btn-md btn-outline-secondary"
            wire:click="stop"
    >
        reset
    </button>
</div>
