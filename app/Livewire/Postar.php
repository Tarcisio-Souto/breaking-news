<?php

namespace App\Livewire;

use App\Models\Noticia;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Postar extends Component
{

    use WithFileUploads;


    #[Validate('required|string|min:3|max:250')]
    public $titulo;

    #[Validate('required')]
    public $descricao;

    #[Validate('image')]
    public $photo;

    public function postar()
    {
        $this->validate();

        /* Pegar MAX(id) das notícias */
        $maxID = Noticia::whereRaw('id = (SELECT MAX(`id`) FROM noticias)')->get();

        $path = 'noticia/' . $maxID[0]->id + 1;
        $this->photo->store($path);

        $complete_path = substr(Storage::url(Storage::disk('public')->put($path, $this->photo)), 9);

        Noticia::create([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'imagem' => $complete_path,
        ]);


        session()->flash('message', 'Notícia registrada com sucesso!');
        return $this->redirectRoute('/', navigate: true);

    }

    

    public function render()
    {
        return view('livewire.postar');
    }
}
