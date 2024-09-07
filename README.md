<h3 align="center">Breaking News</h3>
<br>

<p>
Projeto de leitura de notícias. Dividido entre ambiente de usuário e administrador, possibilitando realizar o CRUD das postagens das notícias.
<p>

<br><br>

><h3 align="center">Principais Ferramentas Utilizadas</h3>
<br>

<ul>
    <li>Laravel</li>
    <li>Docker</li>
    <li>NGINX</li>
    <li>MySQL</li>
    <li>Livewire</li>
    <li>Tailwind</li>
</ul>
<br>

><h3 align="center">Requisitos</h3>
<br>

<p>
<b>Para executar ou customizar/desenvolver a aplicação é necessário ter os recursos abaixo após a clonagem:</b>
<br><br>
<ul>
    <li><b>PHP 8.2</b></li>
    <li><b>Laravel 10</b></li>
    <li>
        <b>Editor de códigos (Visual Studio Code ou outro como o Android Studio)</b>
        <ul><br>
            <li>Visual Studio Code - Disponível em: https://code.visualstudio.com/download</li>
        </ul>  
    </li>
    <br>
    <li>
        <b>Docker</b>
        <ul><br>
            <li>Disponível em: https://docs.docker.com/</li>
        </ul>  
    </li>
    <br>
</ul>


<p><br>

><h3 align="center">Instruções Para Após a Clonagem do Projeto</h3>
<br>

<ul>
    <li>Executar os comandos abaixo:</li>
    <li>composer install</li>
    <li>php artisan key:generate</li>
    <li>php artisan storage:link</li>
    <li>docker-compose up -d</li>
</ul>
<br>
><h3 align="center">Configurações do Banco de Dados No Arquivo .env:</h3>
<br>

<ul>
    <li>DB_CONNECTION=mysql</li>
    <li>DB_HOST=bnewsdb</li>
    <li>DB_PORT=3306</li>
    <li>DB_DATABASE=bndb</li>
    <li>DB_USERNAME=root</li>
    <li>DB_PASSWORD=root</li>
</ul>
<br>
<p>Observação: para executar os comandos abaixo, pode ser necessário alterar o seguinte parâmetro para: DB_HOST=127.0.0.1</p>
<br>
<p>

<b>Verificada a conexão com o banco de dados, execute:</b>
<br>
<ul>
    <li>php artisan migrate</li>
    <li>php artisan db:seed</li>
</ul>
<br>
<p>Observação: após executar estes comandos, retorne o valor do parâmetro: DB_HOST=bnewsdb</p>
<p>Usuário de testes: E-mail: admin@admin.com | Senha: kirchhoff</p>
<br>

<br><br>

><p>TSS - Vitória/ES - 2024</p>
