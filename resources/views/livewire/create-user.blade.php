<div class="container">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit="save">
        <label for="name">
            Nom
        </label>
        <input type="text" wire:model.blur="form.name" class="form-control mt-1">
        @error('form.name')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror

        <label for="email" class="mt-3">
            Email
        </label>
        <input type="email" wire:model.blur="form.email" class="form-control mt-1 mb-3">
        @error('form.email')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror


        <label for="password">
            Password
        </label>
        <input type="password" wire:model.blur="form.password" class="form-control mt-1">
        @error('form.password')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror

{{--        <button type="submit" wire:click.prevent="save"--}}
{{--            class="btn btn-primary mt-5"--}}
{{--        >   --}}

        <button type="submit" class="btn btn-primary mt-5"
        >
            Enregistrer
        </button>
    </form>

    <div class="my-5">
        <livewire:user-list :Users="$users"  />
    </div>


</div>
