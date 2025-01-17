<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleEdit extends Component
{
    public $title, $body;
    public $article;

    public function update()
    {
        $this->article->update([
            'title'=>$this->title,
            'body'=>$this->body
        ]);
        session()->flash('message', 'modifica avvenuto con successo');
    }

    public function destroy()
    {
        $this->article->delete();
        return redirect(route('article.index'))->with('message', 'articolo eliminato con successo');
    }

    public function mount()
    {
        $this->title = $this->article->title;
        $this->body = $this->article->body;
    }

    public function render()
    {
        return view('livewire.article-edit');
    }
}
