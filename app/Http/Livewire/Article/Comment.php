<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use Illuminate\Database\Events\ModelsPruned;
use Livewire\Component;
use App\Models\Comment as ModelsComment;
use Illuminate\Support\Facades\Auth;

class Comment extends Component
{
    // public $body, $article;

    // public function mount($id)
    // {
    //     $this->article = Article::find($id);
    // }

    // public function render()
    // {
    //     return view('livewire.article.comment');
    // }

    // public function store()
    // {
    //     $this->validate(['body' => 'require']);
    //     $comment = ModelsComment::create([
    //         'user_id' => Auth::user()->id,
    //         'article_id' => $this->id,
    //     ]);
    // }
}
