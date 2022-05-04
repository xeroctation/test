<div style="text-align: center">
    <input type="text" wire:model="searchTerm" />
    @foreach($users as $user)
        <li>
            {{ $user->name }}
        </li>
    @endforeach
</div>
