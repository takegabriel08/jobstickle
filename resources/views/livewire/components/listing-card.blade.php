<div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
    <div class="h-56 w-full">
        <a href="/listings/{{ $listing->id }}">
            <img class="mx-auto h-full dark:hidden" src="{{ asset('images/no-image.svg') }}" alt="" />
            <img class="mx-auto hidden h-full dark:block" src="{{ asset('images/no-image-dark.svg') }}" alt="" />
        </a>
    </div>
    <div class="pt-6">
        <a href="/listings/{{ $listing->id }}"
            class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">{{ $listing->title }}</a>

        <div class="mt-4 flex items-center justify-between gap-4">
            <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">
                {{ $listing->company }}</p>
        </div>
        <div class="mt-4 flex items-center gap-4">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                    clip-rule="evenodd" />
            </svg>

            <p class="text-m font-regular leading-tight text-gray-700 dark:text-white">
                {{ $listing->location }}</p>
        </div>
    </div>
</div>