<div>
    @foreach ($posts as $post)
        <div class="p-4 my-4 bg-white shadow rounded-md">
            <div class="block">
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
                <button wire:click="showUpdateForm({{ $post->id }})"
                    class="p-2 bg-green-600 hover:bg-green-400 text-white rounded-md">Edit</button>
                <button wire:click="delete({{ $post->id }})" onclick="return confirm('Apakah Yakin ?') || event.stopImmediatePropagation()"
                    class="p-2 bg-red-600 hover:bg-red-400 text-white rounded-md">Delete</button>
            </div>
            <div>
                @if ($updateStateID != $post->id)
                    <span>{{ $post->body }}</span>
                @endif

                @if ($updateStateID === $post->id)
                    <textarea
                        wire:model="body"
                        name="body"
                        class="appearance-none rounded-none relative block w-full px-3 py-2 m-4 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        rows="3"></textarea>
                    <div class="flex justify-end">
                        <button wire:click="updatePost({{ $post->id }})"
                            class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-400 rounded">Change</button>
                    </div>
                @endif

            </div>
        </div>
    @endforeach
</div>
