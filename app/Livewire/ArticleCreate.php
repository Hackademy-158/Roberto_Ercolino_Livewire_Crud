<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ArticleCreate extends Component
{
    #[Validate('required|min:3')]
    public $title;
    #[Validate('required|min:5')]
    public $body;

    // protected $rules = [
    //     'title'=> 'required|min:3',
    //     'body'=>'required|min:5'
    // ];



    public function store()
    {
        $this->validate();

        Article::create([
            'title'=>$this->title,
            'body'=>$this->body
        ]);

        session()->flash('message', 'articolo inserito con successo');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-create');
    }
}
