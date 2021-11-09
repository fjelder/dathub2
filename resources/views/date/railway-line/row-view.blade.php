<x-livewire-tables::table.cell>
    {{$loop->iteration}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ ucfirst($row->number) }}
    <button wire:click="update('{{$row->id}}')">edit</button>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ ucfirst($row->start) }} -
    {{ ucfirst($row->end) }}
</x-livewire-tables::table.cell>