<div>
    <h3 class="text-xl font-medium mb-6">
        Send me a message
    </h3>

    @if (session()->has('success'))
        <div class="bg-green-800 rounded-lg p-4 text-white mb-6">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submitForm" method="POST" class="space-y-6">
        <input type="hidden" name="access_key" value="f328a1cb-48aa-42f3-b261-5ef235eb3a6a" />
        <div>
            <label class="block text-gray-300 mb-2 text-sm">Name</label>
            <input wire:model="name" type="text" name="name" id="name"
                class="contact-input w-full p-3 bg-transparent outline-none rounded-lg" placeholder="Your name" />
            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-300 mb-2 text-sm">Email</label>
            <input wire:model="email" type="email" id="email" name="email"
                class="contact-input w-full p-3 bg-transparent outline-none rounded-lg" placeholder="your@email.com" />
            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-300 mb-2 text-sm">Message</label>
            <textarea wire:model="message" id="message" name="message"
                class="contact-input w-full p-3 bg-transparent outline-none rounded-lg min-h-32" placeholder="Your message"></textarea>
            @error('message')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="w-full py-3 bg-gray-800 rounded-lg text-white font-medium transition-all hover:bg-gray-700 hover:shadow-lg">
            <span wire:loading.remove>Send Message</span>
            <div wire:loading class="flex items-center justify-center">
                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
            </div>
        </button>
    </form>
</div>
