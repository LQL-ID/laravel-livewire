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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'newComment' => ['required', 'max:255']
        ], ['required' => 'Kolom Komentar Tidak Boleh Kosong', 'max' => 'Karakter tidak Boleh lebih dari :max Karakter']);
    }

    /**
     * add new comments functions.
     */
    public function addComment()
    {
        $this->validate(['newComment' => ['required', 'max:255']], ['required' => 'Kolom Komentar Tidak Boleh Kosong', 'max' => 'Karakter tidak Boleh lebih dari :max Karakter']);
        
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
