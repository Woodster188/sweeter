<form x-data="{
    body: $wire.entangle('form.body'),
    radius: 30
}" class="border-b border-t border-gray-200 dark:border-dim-200 pb-4 border-l border-r">
    <div class="flex flex-shrink-0 pb-4 p-4">
        <div class="flex flex-shrink-0 p-4 pb-0">
            <img src="{{ auth()->user()->profile_photo_url }}"
                 class="inline-block h-10 w-10 rounded-full"
                 alt="Your profile picture">
        </div>
        <div class="w-full p-2">
            <label class="sr-only" for="main-compose">Tweet Body</label>
            <textarea
                x-auto-resize
                id="main-compose"
                placeholder="What's happening?"
                class="dark:text-white min-h-[64px] ring-0 focus:ring-0 text-gray-900 placeholder-gray-400 w-full h-10 bg-transparent border-0 focus:outline-none resize-none"></textarea>
        </div>
    </div>
     <div class="w-full flex items-top p-2 text-white pl-14">
        <div class="flex-grow flex justify-between">
            <label
                for="images"
                class="text-blue-400 hover:bg-blue-50 dark:hover:bg-dim-800 rounded-full p-2"
            >
                <svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor">
                    <g>
                        <path
                            d="M19.75 2H4.25C3.01 2 2 3.01 2 4.25v15.5C2 20.99 3.01 22 4.25 22h15.5c1.24 0 2.25-1.01 2.25-2.25V4.25C22 3.01 20.99 2 19.75 2zM4.25 3.5h15.5c.413 0 .75.337.75.75v9.676l-3.858-3.858c-.14-.14-.33-.22-.53-.22h-.003c-.2 0-.393.08-.532.224l-4.317 4.384-1.813-1.806c-.14-.14-.33-.22-.53-.22-.193-.03-.395.08-.535.227L3.5 17.642V4.25c0-.413.337-.75.75-.75zm-.744 16.28l5.418-5.534 6.282 6.254H4.25c-.402 0-.727-.322-.744-.72zm16.244.72h-2.42l-5.007-4.987 3.792-3.85 4.385 4.384v3.703c0 .413-.337.75-.75.75z"
                        ></path>
                        <circle cx="8.868" cy="8.309" r="1.542"></circle>
                    </g>
                </svg>
                <input
                    type="file"
                    multiple
                    id="images"
                    class="hidden"
                />
            </label>
        </div>
        <div class="w-10 h10 relative" >
            <svg class="transform -rotate-90" viewbox="0 0 120 120">
                <circle
                    cx="60"
                    cy="60"
                    fill="none"
                    stroke-width="8"
                    class="stroke-current text-gray-700"
                    :r="30" >
            </svg>
        </div>
        <button
            type="submit"
            href="#"
            class="bg-blue-400 hover:bg-blue-500 text-white rounded-full py-1 px-4 ml-auto mr-1"
        >
            <span class="font-bold text-sm">Swiewett</span>
        </button>
    </div>
</form>
