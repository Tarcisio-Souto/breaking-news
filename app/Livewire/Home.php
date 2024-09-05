<?php

namespace App\Livewire;

use App\Models\Noticia;
use Livewire\Component;

class Home extends Component
{
    public $search = '';    

    public function render()
    {
        $noticias = Noticia::getNoticias($this->search);

        return view('livewire.home', [
            'noticias' => $noticias
        ]);
    }
}
