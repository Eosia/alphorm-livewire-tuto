<div class="container">
    <form wire:submit="save">
        <label for="name">
            Nom
        </label>
        <input type="text" wire:model="name" class="form-control mt-1">
        @error('name')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror

        <label for="email" class="mt-3">
            Email
        </label>
        <input type="email" wire:model="email" class="form-control mt-1 mb-3">
        @error('email')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror


        <label for="password">
            Password
        </label>
        <input type="password" wire:model="password" class="form-control mt-1">
        @error('password')
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
</div>
