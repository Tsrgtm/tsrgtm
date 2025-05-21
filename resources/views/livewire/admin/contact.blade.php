<div class="space-y-6">
    <div class="flex w-full items-center justify-between gap-4">
        <div class="space-y-1">
            <h2 class="text-2xl font-bold text-white">Contact</h2>
            <p class="text-gray-400">You can see and edit your contact form data here.</p>
        </div>
    </div>

    <hr class="my-6 border-gray-700">

    @if ($contacts->count() > 0)
        <div class="flex items-center justify-end gap-4">
            <div class="w-[320px]">
                <input wire:model.live="search" type="search" id="search" name="search"
                    class="contact-input w-full p-3 bg-gray-800 text-white outline-none rounded-lg"
                    placeholder="Search by name, email, subject, or message" />
            </div>
        </div>
    @endif

    <table class="w-full bg-gray-800 border border-gray-700 rounded-lg overflow-hidden">
        <thead class="text-gray-200 border-b border-gray-700">
            <tr>
                <th class="px-4 py-2 text-left w-32">Name</th>
                <th class="px-4 py-2 text-left w-32">Email</th>
                <th class="px-4 py-2 text-left w-32">Subject</th>
                <th class="px-4 py-2 text-left w-48">Message</th>
                <th class="px-4 py-2 text-left w-32">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-300">
            @forelse ($contacts as $index => $contact)
                <tr class="{{ $index % 2 == 0 ? 'bg-gray-700' : '' }} hover:bg-gray-600">
                    <td class="px-4 py-2">{{ $contact->name }}</td>
                    <td class="px-4 py-2">{{ $contact->email }}</td>
                    <td class="px-4 py-2 {{ $contact->subject ? '' : 'text-gray-500' }}">
                        {{ $contact->subject ?: 'No subject' }}
                    </td>
                    <td class="px-4 py-2">{{ Str::limit($contact->message, 50) }}</td>
                    <td class="px-4 py-2">
                        <button wire:click="deleteContact({{ $contact->id }})"
                            class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg">Delete</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-gray-500">
                        No contacts available
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>
