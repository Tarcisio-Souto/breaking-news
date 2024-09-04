<?php

namespace Database\Seeders;

use App\Models\Noticia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $noticias = [
            ['titulo' => 'Título 1', 'descricao' => 'Descrição 1', 'imagem' => null],
            ['titulo' => 'Título 2', 'descricao' => 'Descrição 2', 'imagem' => null],
            ['titulo' => 'Título 3', 'descricao' => 'Descrição 3', 'imagem' => null],
            ['titulo' => 'Título 4', 'descricao' => 'Descrição 4', 'imagem' => null],
            ['titulo' => 'Título 5', 'descricao' => 'Descrição 5', 'imagem' => null],
            ['titulo' => 'Título 6', 'descricao' => 'Descrição 6', 'imagem' => null],
            ['titulo' => 'Título 7', 'descricao' => 'Descrição 7', 'imagem' => null],
            ['titulo' => 'Título 8', 'descricao' => 'Descrição 8', 'imagem' => null],
            ['titulo' => 'Título 9', 'descricao' => 'Descrição 9', 'imagem' => null],
            ['titulo' => 'Título 10', 'descricao' => 'Descrição 10', 'imagem' => null],
            ['titulo' => 'Título 11', 'descricao' => 'Descrição 11', 'imagem' => null],
            ['titulo' => 'Título 12', 'descricao' => 'Descrição 12', 'imagem' => null]
        ];
        
        foreach ($noticias as $noticia) {

            Noticia::create($noticia);

        }

    }
}
