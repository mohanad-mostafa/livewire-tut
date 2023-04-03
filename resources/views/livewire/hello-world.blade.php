<div>

    {{-- <input wire:model="loud" type="checkbox">

    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>GoodBye</option>
        <option>Adios</option>
    </select>

    {{ implode(', ', $greeting) }} {{ $name }} @if ($loud)
        !
    @endif

    <form action="#" wire:submit.prevent="$set('name', 'Bingo')">
        <button>Reset Name</button>
    </form> --}}

    {{-- Hello {{$name}} --}}

    @livewire('say-hi', ['name' => $name])
</div>
