<div class="mx-auto max-w-4xl">
    <div class="relative border-b border-gray-200 dark:border-gray-800">
        <table class="w-full text-left font-medium text-gray-900 dark:text-white md:table-fixed">
            <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                @unless ($listings->isEmpty())
                    @foreach ($listings as $listing)
                        <tr>
                            <td class="whitespace-nowrap py-4 md:w-[384px]">
                                <div class="flex items-center gap-4">
                                    <a href="#" class="flex items-center aspect-square w-10 h-10 shrink-0">
                                        <img class="rounded-sm h-auto w-full max-h-full"
                                            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.svg') }}"
                                            alt="imac image">
                                    </a>
                                    <a href="/listings/{{ $listing->id }}" class="hover:underline">{{ $listing->title }}
                                    </a>
                                </div>
                            </td>

                            <td>
                                <a href="/listings/{{$listing->id}}/edit">
                                    <svg data-tooltip-target="tooltip-edit-{{ $listing->id }}"
                                        class="cursor-pointer w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                    </svg>
                                    <div id="tooltip-edit-{{ $listing->id }}" role="tooltip"
                                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                                        Edit Listing
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                            </td>
                            <td>
                                @livewire('delete-listing', ['listing' => $listing])
                            </td>
                        </tr>
                    @endforeach
                @else
                    <td class="whitespace-nowrap py-4 md:w-[384px]">
                        <div class="flex items-center gap-4">
                            <h2 class="p-4 text-right text-base font-bold text-gray-900 dark:text-white">
                                No listings found
                            </h2>
                        </div>
                    </td>
                @endunless
            </tbody>
        </table>
    </div>
</div>
