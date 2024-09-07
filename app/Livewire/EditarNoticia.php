<?php

namespace App\Livewire;

use App\Models\Noticia;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarNoticia extends Component
{

    use WithFileUploads;



    #[Validate('required|string|min:3|max:250')]
    public $titulo;

    #[Validate('required')]
    public $descricao;

    #[Validate('image')]
    public $photo;

    public $id;
    public $complete_path;


    public function update()
    {
        $noticia = Noticia::getNoticia($this->id);

        if ($this->photo != null) {

            if ($this->photo != $noticia[0]->imagem) {

                /* Removendo a imagem anterior */
                Storage::disk('public')->delete($noticia[0]->imagem);

                /* Salvando a nova imagem */
                $path = 'noticia/' . $this->id;
                $this->photo->store($path);
                $this->complete_path = substr(Storage::url(Storage::disk('public')->put($path, $this->photo)), 9);
            } else 
            {
                $this->complete_path = $this->photo;
            }
            
        }

        $noticia = Noticia::find($this->id);

        $noticia->update([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'imagem' => $this->complete_path
        ]);

        session()->flash('message', 'Postagem atualizada com sucesso!');
    }

    public function render()
    {
        $noticia = Noticia::getNoticia($this->id);

        if ($this->photo != null) {
            $this->photo = $this->photo;
            $this->titulo = $this->titulo;
            $this->descricao = $this->descricao;
        } else {
            $this->photo = $noticia[0]->imagem;
            $this->titulo = $noticia[0]->titulo;
            $this->descricao = $noticia[0]->descricao;
        }

        return view('livewire.editar-noticia', ['noticia' => $noticia]);
    }
}
