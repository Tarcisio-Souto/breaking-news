<div class="row pt-6 pr-6 pl-6 pb-10">
    <div class="col-md-12">

        <div class="row">
            <div class="col-md-12">
                @include('components.layouts.header')
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <br><br><br><br><br>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <input wire:model.live.debounce.1ms="search" type="text" placeholder="Pesquisar notícias"
                    class="focus:ring-blue-500  rounded-lg border px-4 py-2 focus:outline-none focus:ring-2 w-3/5" />
            </div>
        </div>
        <br><br>

        <div class="row">
            <div class="col-md-12">
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-1 md:grid-cols-2">

                    @php
                        $count = 1;
                    @endphp

                    @forelse($noticias as $noticia)
                        <div
                            class="transform rounded-lg bg-white p-6 shadow transition duration-300 ease-in-out hover:scale-105 h-70">

                            <a href="/open-news/{{ $noticia->id }}"
                                class="select-none no-underline disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                data-ripple-light="true">
                                <div class="row">

                                    @if ($count % 2 == 0)
                                        <div class="col-md-8">
                                            <h3 class="text-lg font-semibold">{{ $noticia->titulo }}</h3>
                                            <p class="text-gray-600 line-clamp-4">{{ $noticia->descricao }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg"
                                                class="h-45">
                                        </div>
                                    @endif

                                    @if ($count % 2 != 0)
                                        <div class="col-md-4">
                                            <img src="https://arteeartistas.com.br/wp-content/uploads/2018/09/Noite-Estrelada.-Vincent-van-Gogh.jpg"
                                                class="h-45">
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="text-lg font-semibold">{{ $noticia->titulo }}</h3>
                                            <p class="text-gray-600 line-clamp-4">{{ $noticia->descricao }}</p>
                                        </div>
                                    @endif

                                    @php
                                        $count = $count + 1;
                                    @endphp

                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="rounded-lg bg-white p-4 text-center shadow">Nenhuma notícia encontrada.</div>
                    @endforelse

                    {{ $noticias->links() }}

                </div>
            </div>
        </div>

    </div>

</div>
