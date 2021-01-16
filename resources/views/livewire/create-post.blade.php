<div>
    <textarea
        wire:model="body"
        name="body" placeholder="Post Something..." class="appearance-none rounded-none relative block w-full px-3 py-2 m-4 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" rows="3"></textarea>
    <div class="flex justify-end">
        <button
            wire:click="createPost"
            class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-400 rounded">Post</button>
    </div>
</div>
