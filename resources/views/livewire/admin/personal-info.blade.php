<div class="grid grid-cols-3 gap-4 items-start">
    <fieldset class="bg-gray-800 rounded-lg p-4 border border-gray-700 col-span-2">
        <legend class="text-gray-300 p-1 text-xl font-semibold">Personal Information</legend>
        <div class="flex items-center w-full gap-6">
            <div>
                @if ($image != null)
                    <img src="{{ $image ? $image->temporaryUrl() : asset($image) }}" alt="Profile Picture"
                        class="w-28 h-28 rounded-full border border-gray-700">
                @else
                    <div class="w-28 h-28 rounded-full border border-gray-700 flex items-center justify-center">
                        <i class="fa-solid fa-user text-white text-7xl"></i>
                    </div>
                    <p class="text-gray-300 text-xs mt-2 text-center">No image uploaded</p>
                @endif
            </div>
            <div class="flex flex-col justify-center space-y-2 transition duration-300 ease-in-out">
                <div class="flex items-center space-x-2">
                    <input type="file" name="image" id="image" wire:model="image" class="hidden">
                    <button type="button"
                        class="bg-gradient-to-r from-blue-600 to-blue-700 hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out"
                        onclick="document.getElementById('image').click()">
                        <i class="fas fa-upload"></i> Upload
                    </button>
                </div>
                @if ($image != null)
                    <button type="button"
                        class="bg-gradient-to-r from-red-600 to-red-700 hover:bg-gradient-to-r hover:from-red-500 hover:to-red-600 text-white font-semibold py-2 px-4 rounded-lg tarnsition duration-300 ease-in-out"
                        wire:click="removeProfile">
                        <i class="fas fa-trash"></i> Remove
                    </button>
                @endif
            </div>
            @error('image')
                <p class="text-red-500 text-xs mt-2 text-center">{{ $message }}</p>
            @enderror
        </div>

        <hr class="my-6 border-gray-700">

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="name" class="block text-gray-300 mb-2 text-sm">Name</label>
                <input wire:model="name" type="text" id="name" name="name"
                    class="contact-input w-full p-3 bg-gray-900 text-white outline-none rounded-lg"
                    placeholder="Your name" />
                @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email" class="block text-gray-300 mb-2 text-sm">Email</label>
                <input wire:model="email" type="email" id="email" name="email"
                    class="contact-input w-full p-3 bg-gray-900 text-white outline-none rounded-lg"
                    placeholder="your@email.com" />
                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="phone" class="block text-gray-300 mb-2 text-sm">Phone</label>
                <input wire:model="phone" type="text" id="phone" name="phone"
                    class="contact-input w-full p-3 bg-gray-900 text-white outline-none rounded-lg"
                    placeholder="Your phone number" />
                @error('phone')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="address" class="block text-gray-300 mb-2 text-sm">Address</label>
                <input wire:model="address" type="text" id="address" name="address"
                    class="contact-input w-full p-3 bg-gray-900 text-white outline-none rounded-lg"
                    placeholder="Your address" />
                @error('address')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <hr class="my-6 border-gray-700">

        <div class="grid grid-cols-2 gap-4">
            <div class="space-y-4">
                <div>
                    <label for="job_title" class="block text-gray-300 mb-2 text-sm">Job Title</label>
                    <input wire:model="job_title" type="text" id="job_title" name="job_title"
                        class="contact-input w-full p-3 bg-gray-900 text-white outline-none rounded-lg"
                        placeholder="Your job title" />
                    @error('job_title')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="job_description" class="block text-gray-300 mb-2 text-sm">Job Description</label>
                    <textarea wire:model="job_description" rows="5" id="job_description" name="job_description"
                        class="contact-input w-full p-3 bg-gray-900 text-white outline-none rounded-lg min-h-32"
                        placeholder="Your job description"></textarea>
                    @error('job_description')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="space-y-2">
                <p class="text-gray-300 text-sm">Cirriculum Vitae</p>
                @if ($cv)
                    <div class="flex items-center justify-between p-2 bg-gray-800 rounded border border-gray-700 gap-4">
                        @php
                            // Get the extension safely
                            $ext = method_exists($cv, 'getClientOriginalExtension')
                                ? $cv->getClientOriginalExtension()
                                : pathinfo($cv, PATHINFO_EXTENSION);

                            // Normalize extension
                            $ext = strtolower($ext);
                        @endphp

                        <div class="flex items-center gap-2">
                            @if (in_array($ext, ['pdf', 'doc', 'docx']))
                                <img src="{{ asset("assets/icons/{$ext}.png") }}" alt="icon" class="w-10">
                                <span class="text-gray-300">
                                    {{ method_exists($cv, 'getClientOriginalName') ? $cv->getClientOriginalName() : basename($cv) }}
                                </span>
                            @else
                                <img src="{{ method_exists($cv, 'temporaryUrl') ? $cv->temporaryUrl() : asset("storage/$cv") }}"
                                    alt="preview" class="w-10">
                                <span class="text-gray-300">
                                    {{ method_exists($cv, 'getClientOriginalName') ? $cv->getClientOriginalName() : basename($cv) }}
                                </span>
                            @endif
                        </div>


                        <div class="flex gap-2">
                            @php
                                $isTemporary = method_exists($cv, 'temporaryUrl');
                                $downloadUrl = $isTemporary ? $cv->temporaryUrl() : asset("storage/{$cv}");
                                $fileName = method_exists($cv, 'getClientOriginalName')
                                    ? $cv->getClientOriginalName()
                                    : basename($cv);
                            @endphp

                            <a href="{{ $downloadUrl }}" download="{{ $fileName }}"
                                class="text-white hover:text-gray-300 transition-colors flex items-center justify-center w-8 h-8 rounded-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800">
                                <i class="fas fa-download"></i>
                            </a>

                            <button wire:click="removeCV"
                                class="text-white hover:text-gray-300 transition-colors flex items-center justify-center w-8 h-8 rounded-full bg-gradient-to-r from-red-600 to-red-700 hover:bg-gradient-to-r hover:from-red-700 hover:to-red-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                @endif

                @error('cv')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror

                <div>
                    <input type="file" name="file-input" id="file-input" wire:model="cv"
                        {{ $cv ? 'hidden' : '' }} accept=".pdf,.doc,.docx"
                        class="block w-full shadow-sm rounded-lg text-sm bg-gray-900 text-white
                                    file:bg-gradient-to-r file:from-blue-600 file:to-blue-700 file:border-0
                                    file:me-4
                                    file:py-3 file:px-4">
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset class="bg-gray-800 rounded-lg p-4 border border-gray-700">
        <legend class="text-gray-300 p-1 text-xl font-semibold">Social Media Links</legend>
        <div class="grid gap-4">
            <div>
                <label for="github" class="block text-gray-300 mb-2 text-sm">Github</label>
                <div class="relative">
                    <div
                        class="absolute top-0 left-0 w-12 h-full flex items-center justify-center bg-gradient-to-r from-blue-600 to-blue-700 rounded-l-lg">
                        <img height="20" width="20" src="https://cdn.simpleicons.org/github/fff" />
                    </div>
                    <input wire:model="github" type="url" id="github" name="github"
                        class="contact-input w-full p-3 pl-15 bg-gray-900 text-white outline-none rounded-lg"
                        placeholder="Your github link" />
                </div>
                @error('github')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="linkedin" class="block text-gray-300 mb-2 text-sm">Linkedin</label>
                <div class="relative">
                    <div
                        class="absolute top-0 left-0 w-12 h-full flex items-center justify-center bg-gradient-to-r from-blue-600 to-blue-700 rounded-l-lg">
                        <i class="fab fa-linkedin text-xl text-white"></i>
                    </div>
                    <input wire:model="linkedin" type="url" id="linkedin" name="linkedin"
                        class="contact-input w-full p-3 pl-15 bg-gray-900 text-white outline-none rounded-lg"
                        placeholder="Your linkedin link" />
                </div>
                @error('linkedin')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="twitter" class="block text-gray-300 mb-2 text-sm">Twitter</label>
                <div class="relative">
                    <div
                        class="absolute top-0 left-0 w-12 h-full flex items-center justify-center bg-gradient-to-r from-blue-600 to-blue-700 rounded-l-lg">
                        <img height="20" width="20" src="https://cdn.simpleicons.org/x/fff" />
                    </div>
                    <input wire:model="twitter" type="url" id="twitter" name="twitter"
                        class="contact-input w-full p-3 pl-15 bg-gray-900 text-white outline-none rounded-lg"
                        placeholder="Your twitter link" />
                </div>
                @error('twitter')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="instagram" class="block text-gray-300 mb-2 text-sm">Instagram</label>
                <div class="relative">
                    <div
                        class="absolute top-0 left-0 w-12 h-full flex items-center justify-center bg-gradient-to-r from-blue-600 to-blue-700 rounded-l-lg">
                        <img height="20" width="20" src="https://cdn.simpleicons.org/instagram/fff" />
                    </div>
                    <input wire:model="instagram" type="url" id="instagram" name="instagram"
                        class="contact-input w-full p-3 pl-15 bg-gray-900 text-white outline-none rounded-lg"
                        placeholder="Your instagram link" />
                </div>
                @error('facebook')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </fieldset>

    <div class="flex justify-start mt-4">
        <button type="submit" wire:loading.attr="disabled" wire:click="save" wire:target="save"
            class="bg-gradient-to-r from-gray-800 to-gray-900 text-white px-6 py-2 rounded-lg border border-gray-700 hover:bg-gradient-to-r hover:from-gray-700 hover:to-gray-800 transition duration-300 ease-in-out">
            <Span wire:loading.remove wire:target="save">Save Changes</Span>
            <span wire:loading wire:target="save">
                <i class="fas fa-spinner fa-spin text-white"></i>
            </span>

        </button>
    </div>

</div>
