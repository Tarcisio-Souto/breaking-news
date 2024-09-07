<div class="container">

    <div class="row">
        <div class="col-md-12">
            @include('components.layouts.header')
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <br><br><br><br><br>
            <br><br><br><br><br>
        </div>
    </div>

    @foreach ($noticia as $new)
        <div class="row">

            @if (Auth::check())
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4" align="right">
                    <div class="btn-group text-right" role="group" aria-label="Basic example">
                        <a href="/editar/{{$new->id}}"><button type="button" class="btn btn-warning">Editar</button></a>
                        <button type="button" class="btn btn-danger" wire:click="delete({{ $new->id }})" 
                            wire:confirm="Deseja realmente deletar?">Excluir</button>
                    </div>
                </div>
            @endif

        </div>

        <br><br>

        <div class="col-md-12 px-5 py-5 rounded-lg bg-white p-6 shadow">
            <div class="row">

                <div class="col-md-4"></div>
                <div class="col-md-4 text-center ">
                    <h3>{{ $new->titulo }}</h3>
                </div>
                <div class="col-md-4"></div>

            </div>

            <br><br><br>

            <div class="row">

                <div class="col-md-4">
                    <img src="{{ url("{$new->imagem}") }}"
                        class="h-96">
                </div>

                <div class="col-md-8 text-justify">
                    <p>
                        {{ $new->descricao }}
                    </p>
                </div>

            </div>

        </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <br><br><br><br><br>
            <br><br><br><br><br>
        </div>
    </div>

</div>
