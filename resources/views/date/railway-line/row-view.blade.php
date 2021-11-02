<x-livewire-tables::table.cell>
    {{$loop->iteration}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ ucfirst($row->number) }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ ucfirst($row->start) }} - 
    {{ ucfirst($row->end) }}
</x-livewire-tables::table.cell>