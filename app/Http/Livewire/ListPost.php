<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ListPost extends Component
{
    public $updateStateID = 0;
    public $body;

    protected $listeners = [
        'post-created' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.list-post',[
            'posts' => Post::latest()->get()
        ]);
    }

    public function showUpdateForm($postId)
    {
        $post = Post::find($postId);
        $this->body = $post->body;
        $this->updateStateID = $postId;
    }

    public function updatePost($postId)
    {
        $post = Post::find($postId);
        $post->update([
            'body' => $this->body
        ]);

        $this->updateStateID = 0;
    }

    public function delete($postId)
    {
        $post = Post::find($postId);
        $post->delete();
    }
}
