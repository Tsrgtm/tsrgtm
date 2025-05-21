<div class="space-y-6">
    <div class="flex w-full items-center justify-between gap-4">
        <div class="space-y-1">
            <h2 class="text-2xl font-bold text-white">Education</h2>
            <p class="text-gray-400">You can add, edit, and delete your education here.</p>
        </div>
        <div>
            <button wire:click="openModal(null)"
                class="bg-gradient-to-r from-blue-600 to-blue-700 px-4 py-2 rounded-lg text-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-600 transition duration-300 ease-in-out">
                Add Education
            </button>
        </div>
    </div>

    <hr class="my-6 border-gray-700">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
        @if ($educations && $educations->count() > 0)
            @foreach ($educations as $education)
                <div class="p-4 bg-gray-800 rounded-lg border border-gray-700">
                    <h3 class="text-xl font-medium text-white">
                        {{ $education->title }}
                    </h3>
                    <p class="text-gray-400 text-sm">
                        {{ $education->institution }} •
                        {{ Carbon\Carbon::parse($education->start_date)->format('Y') }} -
                        {{ $education->end_date ? Carbon\Carbon::parse($education->end_date)->format('Y') : 'Present' }}
                    </p>
                    <p class="text-gray-300 mt-2 leading-relaxed">
                        {{ $education->description }}
                    </p>
                    <hr class="my-4 border-gray-700">
                    <div class="flex items-center justify-end gap-2">
                        <button wire:click="openModal({{ $education->id }})"
                            class="bg-gradient-to-r from-blue-600 to-blue-700 px-4 py-2 rounded-lg text-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-600 transition duration-300 ease-in-out">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button wire:click="confirmDelete({{ $education->id }})"
                            class="bg-gradient-to-r from-red-600 to-red-700 px-4 py-2 rounded-lg text-white hover:bg-gradient-to-r hover:from-red-500 hover:to-red-600 transition duration-300 ease-in-out">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-span-2 bg-gray-800 rounded-lg p-4 text-center">
                <p class="text-gray-300">No education found.</p>

            </div>
        @endif
    </div>

    @if ($showModal)
        <div class="fixed inset-0 flex items-center justify-center z-999">

            <div wire:click="closeModal" class="fixed inset-0 bg-gray-900 opacity-80"></div>

            <div class="relative bg-gray-800 rounded-lg p-6 z-50 max-w-xl w-full shadow">
                <div wire:click="closeModal"
                    class="absolute top-4 right-4 text-gray-600 hover:text-gray-300 cursor-pointer w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-white mb-6">
                    {{ $editId ? 'Edit Education' : 'Add Education' }}
                </h2>
                <form wire:submit.prevent="save" class="space-y-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="title" class="block text-gray-300 mb-2 text-sm">Title</label>
                        <input wire:model="title" type="text" id="title" name="title"
                            class="contact-input w-full p-3 bg-gray-900 text-gray-300 outline-none rounded-lg"
                            placeholder="Your title" />
                        @error('title')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="institution" class="block text-gray-300 mb-2 text-sm">Institution</label>
                        <input wire:model="institution" type="text" id="institution" name="institution"
                            class="contact-input w-full p-3 bg-gray-900 text-gray-300 outline-none rounded-lg"
                            placeholder="Your institution" />
                        @error('institution')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="start_date" class="block text-gray-300 mb-2 text-sm">Start Date</label>
                        <input wire:model="start_date" type="date" id="start_date" name="start_date"
                            class="contact-input w-full p-3 bg-gray-900 text-gray-300 outline-none rounded-lg"
                            placeholder="Your start date" />
                        @error('start_date')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="end_date" class="block text-gray-300 mb-2 text-sm">End Date</label>
                        <input wire:model="end_date" type="date" id="end_date" name="end_date"
                            class="contact-input w-full p-3 bg-gray-900 text-gray-300 outline-none rounded-lg"
                            placeholder="Your end date" />
                        @error('end_date')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block text-gray-300 mb-2 text-sm">Description</label>
                        <textarea wire:model="description" rows="5" id="description" name="description"
                            class="contact-input w-full p-3 bg-gray-900 text-gray-300 outline-none rounded-lg min-h-32"
                            placeholder="Your description"></textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-2 flex justify-end">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">
                            {{ $editId ? 'Update Education' : 'Add Education' }}
                        </button>
                    </div>
                </form>
            </div>

        </div>
    @endif

    @if ($showDeleteModal)
        <div class="fixed inset-0 flex items-center justify-center z-999">

            <div wire:click="closeModal" class="fixed inset-0 bg-gray-900 opacity-80"></div>

            <div class="relative bg-gray-800 rounded-lg p-6 z-50 max-w-md w-full shadow">
                <div wire:click="closeModal"
                    class="absolute top-4 right-4 text-gray-600 hover:text-gray-300 cursor-pointer w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </div>
                <div class="text-center mb-6">
                    <i class="fas fa-trash-alt text-4xl text-red-500 animate-pulse mb-2"></i>
                    <h2 class="text-2xl font-bold text-white mb-2">
                        Delete Education
                    </h2>
                    <p class="text-gray-300">Are you sure you want to delete this education?</p>
                </div>
                <form wire:submit.prevent="delete" class="space-y-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="col-span-2 flex justify-end gap-2">
                        <button type="button"
                            class="bg-transparent py-2 px-4 text-gray-400 hover:text-gray-300 hover:bg-gray-700 rounded-lg transition duration-300 ease-in-out"
                            wire:click="closeModal">
                            Cancel
                        </button>

                        <button type="button"
                            class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition duration-300 ease-in-out"
                            wire:click="delete({{ $deleteId }})">
                            Delete Education
                        </button>
                    </div>
                </form>
            </div>

        </div>
    @endif

</div>
