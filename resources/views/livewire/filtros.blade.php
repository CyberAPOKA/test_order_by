<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">
                    Nome
                    <span wire:click="sortBy('name')" class="float-right text-sm" style="cursor: pointer;">
                        A-Z
                    </span>
                </th>
                <th scope="col">Email</th>
                <th scope="col">Idade</th>
                <th scope="col">Sobrenome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <th>{{ $user->name }}</th>
                    <th>{{ $user->email }}</th>
                    <th>{{ $user->idade }}</th>
                    <th>{{ $user->sobrenome }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
