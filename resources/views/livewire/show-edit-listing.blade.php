<section class="bg-white dark:bg-gray-900">
    <div class="flex flex-col justify-center py-8 px-4 mx-auto max-w-[450px] lg:py-16">
        <h2 class="mb-4 text-xl text-center font-bold text-gray-900 dark:text-white">
            Edit the Listing:
            <span class="ms-3 text-2xl text-gray-900 dark:text-white">
                {{ $listing->title }}
            </span>
        </h2>
        <form wire:submit.prevent="save" enctype="multipart/form-data">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job
                        Title</label>
                    <input type="text" name="title" id="title" wire:model="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type listing title">
                    @error('title')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Company
                    </label>
                    <input type="text" name="company" id="company" wire:model="company"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type Company name">
                    @error('company')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="tags"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags</label>
                    <input type="text" name="tags" id="tags" wire:model="tags"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="worker, fighter, dev">
                    @error('tags')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        City
                    </label>
                    <input type="text" name="location" id="location" wire:model="location"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type Location">
                    @error('location')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Email
                    </label>
                    <input type="text" name="email" id="email" wire:model="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type email address">
                    @error('email')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Website
                    </label>
                    <input type="text" name="website" id="website" wire:model="website"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type website address">
                    @error('website')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-2 flex items-center justify-center my-4 xl:mb-16 xl:mt-12">
                    <img class="rounded max-w-sm lg:max-w-full"
                        src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.svg') }}"
                        alt="" />
                </div>
                <div class="col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">
                        Upload logo
                    </label>
                    <input wire:model="file_input"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="file_input">
                    @error('file_input')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job
                        Description</label>
                    <textarea id="description" rows="8" name="description" wire:model="description"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Your description here"></textarea>
                    @error('description')
                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                class="font-medium">Oh, snapp!</span>{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-2 flex justify-center">
                    <button type="submit"
                        class="cursor-pointer text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        Edit listing
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
