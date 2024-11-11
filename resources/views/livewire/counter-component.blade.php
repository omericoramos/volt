<?php

use function Livewire\Volt\{layout, state};

state(['count' => 0]);

$increment = fn() => $this->count++;
$decrement = fn() => $this->count--;

?>
<div>
    <button class="rounded bg-rose-500 px-4 py-2" wire:click="decrement">Retirar - </button>
    <h1 class="text-3xl my-9 ml-10">Quantidade:{{ $count }}</h1>
    <button class="rounded bg-green-500 px-4 py-2" wire:click="increment">Adicionar + </button>
</div>
