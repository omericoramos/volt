<?php

use function Livewire\Volt\
use function Livewire\Volt\{layout, state, title};

layout('components.layouts.admin'); // Ajuste para o caminho certo

title('Contador de Usuários'); // Tente verificar como isso se comporta

state(['count' => 0]);

$increment = fn() => $this->count++;
$decrement = fn() => $this->count--;

?>

<div class="mx-auto max-w-3xl">
    <h1 class="text-3xl font-bold text-white">
        Count: {{ $this->count < 0 ? 0 : $this->count }}
    </h1>
    <div class="mt-4">
        <button class="mr-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" wire:click="increment">Adicionar+</button>
        <button class="bg-rose-500 hover:bg-rose-700 text-white font-bold py-2 px-4 rounded" wire:click="decrement">Remover-</button>
    </div>
</div>
