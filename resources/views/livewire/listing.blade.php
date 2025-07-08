<section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div class="mx-auto max-w-5xl">
            <div class="w-full flex items-center justify-between">
                <a href="{{ route('home') }}" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="rotate-180 mr-2 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                    Go back
                </a>
                <div class="flex items-center">
                    @auth
                        @livewire('delete-listing', ['listing' => $listing])
                        <a href="{{ route('edit-job') }}" type="button" data-tooltip-target="tooltip-edit">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <div id="tooltip-edit" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                            edit listing
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    @endauth
                </div>
            </div>
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Job title: {{ $listing->title }}
            </h2>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-4">Company: {{ $listing->company }}</h3>
            <div class="flex items-center justify-center my-8 xl:mb-16 xl:mt-12">
                <img class="rounded-md max-w-xl lg:max-w-full"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.svg') }}"
                    alt="" />
            </div>
            <div class="flex items-center justify-evenly my-6 md:my-12">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                </svg>
                <h4 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $listing->location }}</h4>
            </div>
            <div class="flex items-center justify-evenly my-6 md:my-12">
                <a href="mailto:{{ $listing->email }}"
                    class="px-5 py-3 text-base font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 16">
                        <path
                            d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                        <path
                            d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                    </svg>
                    Large
                </a>
            </div>
            <div class="flex items-center justify-evenly my-6 md:my-12">
                <a href="{{ $listing->website }}"
                    class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    Navigate to website
                    <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
            @livewire('components.listing-tags', ['tags' => $listing->tags])
            <div class="mx-auto space-y-6">
                <h2 class="text-4xl font-extrabold dark:text-white">Job listing description</h2>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    {{ $listing->description }}
                </p>
            </div>
            {{-- <div class="my-6 md:my-12">
            </div> --}}
        </div>
    </div>
</section>
