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
                <div> <label for="descricao" class="text-sm text-gray-700 block mb-1 font-medium">Descrição</label>
                    <textarea name="descricao" id="descricao"
                        class="border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 peer h-full min-h-[100px] w-full resize-none rounded-[7px] px-3 py-2.5 font-sans text-sm font-normal outline outline-0 transition-all"
                        placeholder="" wire:model="descricao"></textarea>
                </div>
                <input type="file" wire:model="photo" class="form-control">

            </div>
            <div class="space-x-4 mt-8"> <button type="submit"
                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Salvar</button>
            </div>
            <br>
            <!--<div class="mb-3 row">
                <span wire:loading class="col-md-3 offset-md-5 text-primary">Criando...</span>
            </div>-->
        </form>
    </div>


    <br><br><br><br>
    <br><br><br><br>





</div>
