@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @unless(empty($tags))
        @foreach ($tags as $tag)
            <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                <a href="/?tag={{ $tag }}">{{ $tag }}</a>
            </li>
        @endforeach
    @else
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <p>No tags</p>
        </li>
    @endunless
</ul>
