<div class="mt-8 flex flex-row justify-between items-center">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- <x-primary-button wire:click="processReport" wire:poll='onReportProcessed'> --}}
    <x-primary-button wire:click="processReport">
        Processar Relatório
    </x-primary-button>

    <span class="relative flex h-3 w-3">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full ocapity-75"
        :class="{
            'bg-yellow-400' : $wire.status === 'processing',
            'bg-green-400' : $wire.status === 'done'
        }"></span>
        <span class="relative inline-flex rounded-full h-3 w-3"
        :class="{
            'bg-yellow-400' : $wire.status === 'processing',
            'bg-green-400' : $wire.status === 'done'
        }"></span>
    </span>
</div>
