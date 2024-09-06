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

        $descricao = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id dui eu ante pharetra pellentesque. Suspendisse orci mi, vestibulum non auctor in, pharetra non lorem. Sed vitae rutrum erat. Nunc elit diam, consequat vitae facilisis nec, placerat et nulla. Etiam vel tincidunt ante. Nulla varius semper accumsan. Sed dui est, euismod ut mauris id, fringilla tincidunt augue. Suspendisse potenti. Donec accumsan gravida elit, non imperdiet felis eleifend vitae. Donec vitae mauris condimentum, volutpat ipsum et, facilisis purus. Curabitur et tellus viverra, ultrices leo at, molestie nisi.

Nulla nec mauris ac odio posuere fermentum eu eu ligula. Etiam congue sem orci, et finibus magna varius eu. Nunc varius ac sem vel imperdiet. Vivamus accumsan diam eros, convallis iaculis justo pharetra nec. Nam gravida efficitur auctor. Etiam ultrices magna ut leo condimentum, quis molestie arcu finibus. Morbi eget commodo neque. Integer odio neque, dignissim sed finibus eu, convallis id mi. Ut eleifend et mi sit amet vulputate.

Sed sit amet ipsum in nibh lacinia ullamcorper at vitae ex. Integer quis tincidunt neque. Aliquam aliquam varius ligula, ut molestie turpis egestas ut. Integer condimentum, risus quis venenatis tristique, urna nibh iaculis massa, a mattis odio justo at metus. Phasellus viverra nulla nec enim porta, non consequat enim pharetra. Ut venenatis nulla nisl, eget fringilla sapien dictum sed. Sed sit amet augue vel velit pulvinar tempor. Maecenas euismod sed ligula eu sodales. Donec commodo odio fermentum, tempor neque commodo, finibus nulla. Nunc rutrum consequat ex, vel dignissim sapien fermentum vitae. Curabitur sit amet tincidunt elit, in mattis urna. Mauris tempus sapien eu nulla vulputate sagittis.";



        $noticias = [
            ['titulo' => 'Título 1', 'descricao' => $descricao, 'imagem' => 'https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg'],
            ['titulo' => 'Título 2', 'descricao' => $descricao, 'imagem' => 'https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg'],
            ['titulo' => 'Título 3', 'descricao' => $descricao, 'imagem' => 'https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg'],
            ['titulo' => 'Título 4', 'descricao' => $descricao, 'imagem' => 'https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg'],
            ['titulo' => 'Título 5', 'descricao' => $descricao, 'imagem' => 'https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg'],
            ['titulo' => 'Título 6', 'descricao' => $descricao, 'imagem' => 'https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg'],
            ['titulo' => 'Título 7', 'descricao' => $descricao, 'imagem' => 'https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg'],
            ['titulo' => 'Título 8', 'descricao' => $descricao, 'imagem' => 'https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg'],
            ['titulo' => 'Título 9', 'descricao' => $descricao, 'imagem' => 'https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg'],
            ['titulo' => 'Título 10', 'descricao' => $descricao, 'imagem' => 'https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg'],
            ['titulo' => 'Título 11', 'descricao' => $descricao, 'imagem' => 'https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg'],
            ['titulo' => 'Título 12', 'descricao' => $descricao, 'imagem' => 'https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg']
        ];
        
        foreach ($noticias as $noticia) {

            Noticia::create($noticia);

        }

    }
}
