<section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div class="mx-auto max-w-5xl">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Job title: {{ $listing->title }}
            </h2>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-4">Company: {{ $listing->company }}</h3>
            <div class="flex items-center justify-center my-8 xl:mb-16 xl:mt-12">
                <img class="max-w-xl lg:max-w-full dark:hidden" src="{{ $listing->image ? asset('storage/' . $listing->logo) : asset('images/no-image.svg') }}" alt="" />
                {{-- <img class="hidden max-w-xl lg:max-w-full dark:block"
                    src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-showcase-dark.svg" alt="" /> --}}
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
                <a href="mailto:{{$listing->email}}"
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
