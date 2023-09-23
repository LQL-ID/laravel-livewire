<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments = [
        [
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi ex cupiditate quo commodi aspernatur delectus veniam necessitatibus.',
            'created_at' => '3 min ago',
            'creator' => 'Wirandra'
        ]
    ];

    public $newComment;

    public function addComment()
    {
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
