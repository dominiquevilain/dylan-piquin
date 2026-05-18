@props([
    'poste',
    'x',
    'y',
])

<div
    class="absolute -translate-x-1/2 -translate-y-1/2 flex flex-col items-center"
    style="left: {{ $x }}%; top: {{ $y }}%;"
>
    <span class="player_circle"></span>
    <span class="text-white text-sm mt-1">
        {{ $poste }}
    </span>
</div>
