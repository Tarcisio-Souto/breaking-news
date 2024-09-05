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

                            <a href="#"
                                class="select-none no-underline disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                data-ripple-light="true" data-dialog-target="animated-dialog">
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


    <!-- Modal -->

    <!--<button
        class="select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        data-ripple-light="true" data-dialog-target="animated-dialog">
        Open Dialog
    </button>-->
    <div data-dialog-backdrop="animated-dialog" data-dialog-backdrop-close="true"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div data-dialog="animated-dialog" data-dialog-mount="opacity-100 translate-y-0 scale-100"
            data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none"
            data-dialog-transition="transition-all duration-300"
            class="relative m-4 w-2/5 min-w-[40%] max-w-[40%] rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl">
            <div
                class="flex items-center p-4 font-sans text-2xl antialiased font-semibold leading-snug shrink-0 text-blue-gray-900">
                Its a simple dialog.
            </div>
            <div
                class="relative p-4 font-sans text-base antialiased font-light leading-relaxed border-t border-b border-t-blue-gray-100 border-b-blue-gray-100 text-blue-gray-500">
                The key to more success is to have a lot of pillows. Put it this
                way, it took me twenty five years to get these plants, twenty five
                years of blood sweat and tears, and I&apos;m never giving up,
                I&apos;m just getting started. I&apos;m up to something. Fan luv.
            </div>
            <div class="flex flex-wrap items-center justify-end p-4 shrink-0 text-blue-gray-500">
                <button data-ripple-dark="true" data-dialog-close="true"
                    class="px-6 py-3 mr-1 font-sans text-xs font-bold text-red-500 uppercase transition-all rounded-lg middle none center hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    Cancel
                </button>
                <button data-ripple-light="true" data-dialog-close="true"
                    class="middle none center rounded-lg bg-gradient-to-tr from-green-600 to-green-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    Confirm
                </button>
            </div>
        </div>
    </div>


</div>
