<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments;

    public $newComment;

    /**
     * mounted functions.
     */
    public function mount()
    {
        $initialComments = \App\Models\Comment::latest()->get();
        $this->comments = $initialComments;
    }

    /**
     * add new comments functions.
     */
    public function addComment()
    {
        if ($this->newComment == "") return;
        
        $createComment = \App\Models\Comment::create([
            'body' => $this->newComment,
            'user_id' => 1,
        ]); 

        $this->comments->prepend($createComment);

        $this->newComment = "";
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
