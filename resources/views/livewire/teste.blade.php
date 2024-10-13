<div>

    <h1>Meu componente livewire</h1>

    <input wire:model.live="search" />

    <br>

    @foreach($users as $user)

    <li>{{$user->name}}</li>

    @endforeach

</div>