@php
    $tags = explode(',', string: str_replace(' ', '', $tags));
@endphp
{{-- <div class="flex items-center justify-evenly my-6 md:my-12"> --}}
<div class="{{ $class }}">
    <h3 class="text-3xl text-gray-900 dark:text-white my-4">Tags:</h3>
    <ul class="flex">
        @foreach ($tags as $tag)
            <li class="flex items-center justify-center">
                <a href="/?tag={{ $tag }}" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    {{ $tag }}
                </a>
            </li>
        @endforeach
    </ul>
</div>