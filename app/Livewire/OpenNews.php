<?php

namespace App\Livewire;

use App\Models\Noticia;
use Livewire\Component;

class OpenNews extends Component
{

    public $id;  

    public function render()
    {
        $noticia = Noticia::getNoticia($this->id);
        return view('livewire.open-news', ['noticia' => $noticia]);
    }
}
