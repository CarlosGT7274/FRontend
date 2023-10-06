<div >
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <h1>{{ $count }}</h1>
 
    {{-- <button wire:loading wire:click="increment">+</button> --}}

    <button wire:click="increment" wire:loading.attr="disabled" >
        <span wire:loading.delay.shortest>+ Incrementando...</span>
        <span wire:loading.remove>+</span>
    </button>
    <div wire:loading.delay.shortest wire:target="increment">
        Processing Payment...
    </div>
    <button wire:click="decrement">-</button>
</div>

