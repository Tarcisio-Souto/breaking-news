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
        <h1 class="font-medium text-3xl">Criar Postagem</h1>
        <form wire:submit.prevent="postar">
            <div class="mt-8 space-y-6">
                <div> <label for="titulo" class="text-sm text-gray-700 block mb-1 font-medium">Título</label> <input
                        type="text" name="titulo" id="titulo"
                        class="font-sans text-sm font-normal border rounded py-1 px-3 block text-gray-700 w-full"
                        wire:model="titulo" placeholder="" /> </div>
                @if ($errors->has('titulo'))
                    <p></p>
                    <span class="text-danger">{{ $errors->first('titulo') }}</span>
                @endif
                <div> <label for="descricao" class="text-sm text-gray-700 block mb-1 font-medium">Descrição</label>
                    <textarea name="descricao" id="descricao"
                        class="border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 peer h-full min-h-[100px] w-full resize-none rounded-[7px] px-3 py-2.5 font-sans text-sm font-normal outline outline-0 transition-all"
                        placeholder="" wire:model="descricao"></textarea>
                </div>
                @if ($errors->has('descricao'))
                    <p></p>
                    <span class="text-danger">{{ $errors->first('descricao') }}</span>
                @endif

            </div>
            <br>
            <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false; progress = 0;"
                x-on:livewire-upload-progress="progress = $event.detail.progress">

                <input name="photo" id="photo" wire:model="photo" type="file" class="form-control">
                @if ($errors->has('photo'))
                    <p></p>
                    <span class="text-danger">{{ $errors->first('photo') }}</span>
                @endif

                <div class="space-x-4 mt-8"> <button type="submit" data-modal-target="default-modal"
                        data-modal-toggle="default-modal"
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
            <br>
        </form>

        <!-- Modal para salvar -->


        <div id="default-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

            <svg class="animate-spin h-8 w-8 text-white mr-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                </circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>

            <span class="text-white text-3xl font-bold">Salvando...</span>

        </div>

    </div>


    <br><br><br><br>
    <br><br><br><br>


</div>
