<div>

    <div class="row">
        <div class="col-md-12">
            @include('components.layouts.header')
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <br><br><br><br><br>
            <br><br><br>
        </div>
    </div>



    <div class="p-8 rounded border border-gray-200">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <h1 class="font-medium text-3xl">Editar Postagem</h1>
        <form wire:submit.prevent="update">
            <div class="mt-8 space-y-6">
                @foreach ($noticia as $new)
                    <div> <label for="" class="text-sm text-gray-700 block mb-1 font-medium">Título</label>
                        <input wire:model="titulo" type="text" name="titulo" id="titulo"
                            value="{{ $new->titulo }}"
                            class="font-sans text-sm font-normal border rounded py-1 px-3 text-gray-700 w-full" />
                        @if ($errors->has('titulo'))
                            <p></p>
                            <span class="text-danger">{{ $errors->first('titulo') }}</span>
                        @endif
                    </div>
                    <div> <label for="" class="text-sm text-gray-700 block mb-1 font-medium">Descrição</label>
                        <textarea wire:model="descricao" name="descricao" id="descricao"
                            class="border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 peer h-full min-h-[100px] w-full resize-none rounded-[7px] px-3 py-2.5 font-sans text-sm font-normal outline outline-0 transition-all"
                            placeholder="">{{ $new->descricao }}</textarea>
                        @if ($errors->has('descricao'))
                            <p></p>
                            <span class="text-danger">{{ $errors->first('descricao') }}</span>
                        @endif
                    </div>
                    <div class="form-group" align="center">
                        @if ($new->imagem != null)
                            <ul>
                                <img src="{{ url("{$new->imagem}") }}" height="200" width="300">
                                <!--<a href="/del-imagem" class="no-underline"><i class="fas fa-trash-alt fa-trash-custom"></i></a>-->
                            </ul>
                        @endif
                    </div>
                @endforeach

                <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                    x-on:livewire-upload-finish="uploading = false; progress = 0;"
                    x-on:livewire-upload-progress="progress = $event.detail.progress">

                    <input name="photo" id="photo" wire:model="photo" type="file" class="form-control">
                    @if ($errors->has('photo'))
                        <p></p>
                        <span class="text-danger">{{ $errors->first('photo') }}</span>
                    @endif

                    <div class="space-x-4 mt-8"> <button type="submit"
                            class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Salvar</button>
                    </div>

                    <div x-show="uploading">
                        <div id="loading-overlay"
                            class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-60">

                            <svg class="animate-spin h-8 w-8 text-white mr-3" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>

                            <span class="text-white text-3xl font-bold">Processando a imagem</span>

                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <div class="row">
        <div class="col-md-12">
            <br><br><br><br>
            <br><br><br><br>
        </div>
    </div>


</div>
