<div>
    <table class="table">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

            <tr wire:key="{{ $user->id }}">
                <td>
                    {{ $user->name }}
                </td>
                <td>
                    {{ $user->email }}
                </td>
                <td>
                    <button wire:click="delete({{ $user->id }})"
                        class="btn btn-danger btn-md"
                    >
                        X
                    </button>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
</div>
