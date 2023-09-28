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
        $initialComments = \App\Models\Comment::all();
        $this->comments = $initialComments;
    }

    /**
     * add new comments functions.
     */
    public function addComment()
    {
        if ($this->newComment == "") return;
        
        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => \Carbon\Carbon::now()->diffForHumans(),
            'creator' => 'Daycode',
        ]);

        $this->newComment = "";
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
