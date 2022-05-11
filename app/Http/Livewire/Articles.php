<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Articles extends Component
{
    //public $h1 = 'Listado de Artículos';
    // public $articles;

    public $search = '';

    public array $category = [
        'name' => ''
    ];

    public $tags = [];

    public $show = false;
    // public $one = "";

    // public function mount() {
    //     $this->articles = Article::all();
    // }

    public function render()
    {
        return view('livewire.articles', [
            'articles' => Article::where('title', 'like', "%{$this->search}%")->get()
        ]);
    }
}
