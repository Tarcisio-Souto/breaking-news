<div>
    <div class="mb-4">
      <input
        wire:model.live.debounce.300ms="search"
        type="text"
        placeholder="Pesquisar notícias"
        class="focus:ring-blue-500 w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2"
      />
    </div>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-2">
      @forelse($noticias as $noticia)
      <div
        class="transform rounded-lg bg-white p-4 shadow transition duration-300 ease-in-out hover:scale-105"
      >
        <h3 class="text-lg font-semibold">{{ $noticia->titulo }}</h3>
        <p class="text-gray-600">{{ $noticia->descricao }}</p>
      </div>
      @empty
      <div class="rounded-lg bg-white p-4 text-center shadow">Nenhuma notícia encontrada.</div>
      @endforelse
    </div>
  </div>