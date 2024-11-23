<div>
    <input wire:model.live="message" type="text">
    <button wire:click='increment'>+</button>
    {{ $message }}
    {{ $plus }}

</div>