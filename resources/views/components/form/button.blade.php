@props([
    "text",
    "type",
])
<div class="flex justify-center items-center">
<button class="btn-primary items-center cursor-pointer" type="{{$type}}">{{$text}}</button>
</div>
