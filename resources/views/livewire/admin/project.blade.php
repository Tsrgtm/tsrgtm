<div class="space-y-6">
    <div class="flex w-full items-center justify-between gap-4">
        <div class="space-y-1">
            <h2 class="text-2xl font-bold text-white">Projects</h2>
            <p class="text-gray-400">You can add, edit, and delete your projects here.</p>
        </div>
        <div>
            <button wire:click="openModal(null)"
                class="bg-gradient-to-r from-blue-600 to-blue-700 px-4 py-2 rounded-lg text-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-600 transition duration-300 ease-in-out">
                Add Project
            </button>
        </div>
    </div>

    <hr class="my-6 border-gray-700">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
        @if ($projects && $projects->count() > 0)
            @foreach ($projects as $project)
                <div class="project-card bg-gray-800 rounded-xl p-6 border border-gray-700">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-xl font-bold text-white">
                                {{ $project->title }}
                            </h3>
                        </div>
                        <div class="flex space-x-3">
                            @if ($project->github)
                                <a href="{{ $project->github }}" target="_blank"
                                    class="text-gray-500 hover:text-gray-300"><i class="fab fa-github"></i></a>
                            @endif

                            @if ($project->url)
                                <a href="{{ $project->url }}" target="_blank"
                                    class="text-gray-500 hover:text-gray-300"><i
                                        class="fas fa-external-link-alt"></i></a>
                            @endif

                        </div>
                    </div>
                    <p class="text-gray-300 mb-4">
                        {{ $project->description }}
                    </p>
                    <div class="flex flex-wrap gap-2">
                        @foreach (explode(',', $project->tags) as $tag)
                            <span
                                class="px-3 py-1 bg-gray-900 rounded-full text-xs text-gray-300">{{ $tag }}</span>
                        @endforeach
                    </div>

                    <hr class="my-6 border-gray-700">

                    <div class="flex items-center justify-end gap-2">
                        <button wire:click="openModal({{ $project->id }})"
                            class="bg-gradient-to-r from-blue-600 to-blue-700 px-4 py-2 rounded-lg text-white hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-600 transition duration-300 ease-in-out">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button wire:click="confirmDelete({{ $project->id }})"
                            class="bg-gradient-to-r from-red-600 to-red-700 px-4 py-2 rounded-lg text-white hover:bg-gradient-to-r hover:from-red-500 hover:to-red-600 transition duration-300 ease-in-out">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </div>
            @endforeach
            @if ($projects->hasPages())
                <div class="col-span-2 bg-gray-800 rounded-lg p-4 text-center">
                    {{ $projects->links() }}
                </div>
            @endif
        @else
            <div class="col-span-2 bg-gray-800 rounded-lg p-4 text-center">
                <p class="text-gray-300">No projects found.</p>

            </div>
        @endif
    </div>

    @if ($showModal)
        <div class="fixed inset-0 flex items-center justify-center z-999">

            <div wire:click="closeModal" class="fixed inset-0 bg-gray-900 opacity-80"></div>

            <div class="relative bg-gray-800 rounded-lg p-6 z-50 max-w-3xl w-full shadow">
                <div wire:click="closeModal"
                    class="absolute top-4 right-4 text-gray-600 hover:text-gray-300 cursor-pointer w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-700">
                    <i class="fas fa-times text-xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-white mb-6">
                    {{ $editId ? 'Edit Project' : 'Add Project' }}
                </h2>
                <form wire:submit.prevent="save" class="space-y-4 grid grid-cols-1 gap-4">
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
                        <label for="description" class="block text-gray-300 mb-2 text-sm">Description</label>
                        <textarea wire:model="description" rows="5" id="description" name="description"
                            class="contact-input w-full p-3 bg-gray-900 text-gray-300 outline-none rounded-lg min-h-32"
                            placeholder="Your description"></textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="url" class="block text-gray-300 mb-2 text-sm">Url</label>
                            <input wire:model="url" type="text" id="url" name="url"
                                class="contact-input w-full p-3 bg-gray-900 text-gray-300 outline-none rounded-lg"
                                placeholder="Your url" />
                            @error('url')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="github" class="block text-gray-300 mb-2 text-sm">Github</label>
                            <input wire:model="github" type="text" id="github" name="github"
                                class="contact-input w-full p-3 bg-gray-900 text-gray-300 outline-none rounded-lg"
                                placeholder="Your github" />
                            @error('github')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="tags" class="block text-gray-300 mb-2 text-sm">Tags</label>
                            <input wire:model="tags" type="text" id="tags" name="tags"
                                class="contact-input w-full p-3 bg-gray-900 text-gray-300 outline-none rounded-lg"
                                placeholder="Your tags" />
                            @error('tags')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="image" class="block text-gray-300 mb-2 text-sm">Image</label>
                            <input wire:model="image" type="text" id="image" name="image"
                                class="contact-input w-full p-3 bg-gray-900 text-gray-300 outline-none rounded-lg"
                                placeholder="Your image" />
                            @error('image')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">
                            {{ $editId ? 'Update Project' : 'Add Project' }}
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
                        Delete Project
                    </h2>
                    <p class="text-gray-300">Are you sure you want to delete this project?</p>
                </div>
                <form wire:submit.prevent="delete" class="space-y-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="col-span-2 flex justify-end gap-2">
                        <button type="button" wire:click="closeModal"
                            class="bg-transparent py-2 px-4 text-gray-400 hover:text-gray-300 hover:bg-gray-700 rounded-lg transition duration-300 ease-in-out">
                            Cancel
                        </button>
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg transition duration-300 ease-in-out">
                            Delete
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
