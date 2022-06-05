@include('livewire.form')
<section class="text-black body-font">
    <DIV class="form-group flex justify-center mt-28">
        <h1>¡AQUI TIENES UN BUSCADOR, ÚSALO!</h1>
    </DIV>
    @include('livewire.search')

    <div class="container px-3 py-1 mx-auto">
      <div class="flex flex-wrap -m-4">
    @foreach ($posts as $post)
                    <div class="p-6 md:w-1/3">
                      <div class=" border-2 border-gray-200 border-opacity-60 rounded-lg bg-gray-200">
                        <img src="/storage/{{ $post->image }}" class="h-96 w-96 object-cover">
                        <div class="p-6">
                          <h2 class="tracking-widest text-3xl title-font font-medium text-black mb-1">{{ $post->title }}
                          </h2>
                          <p class="h-72 overflow-auto">{{ $post->body }}
                        </p>
                        </div>
                      </div>
                    </div>
            @endforeach
        </div>
    </div>
</section>
    {{ $posts->links() }}




