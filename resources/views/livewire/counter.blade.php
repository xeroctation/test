<div style="text-align: center">
    <button wire:click="increment">+</button>
    <div class="kek">
        <h1 wire:model="count">{{ $count }}</h1>
        <button wire:click="reset1">reset</button>
    </div>
    <button wire:click="decrement">-</button>
</div>
