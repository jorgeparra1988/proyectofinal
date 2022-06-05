<div class="flex justify-center">
    <form wire:submit.prevent="store" enctype="multipart/form-data">
        @csrf
        <DIV class="form-group flex justify-center mb-3">
            <h1>¡COMPARTE TU RECETA!</h1>
        </DIV>
        <div class="form-group flex justify-center">
            <input type="text" wire:model="title" placeholder="Titulo" class="px-3 py-2.5 mb-5 border-2 border-gray-800 rounded-md">
            @error('title') <br>
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div><br>
            <textarea  wire:model="body" placeholder="Contenido" class="w-96 h-60 border-2 border-gray-800 rounded-md"></textarea>
             @error('body') <br>
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group flex justify-center mt-3"><br>
            @if ($image)
            Image Preview:
            <img src="{{ $image->temporaryUrl() }}">
            @endif
            <input name='image' id='image' type="file" wire:model="image">
            @error('image') <br>
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group flex justify-center mt-5">
            <button wire:click="store" class="px-2 py-1.5 rounded-md bg-green-700 hover:bg-green-800 text-white">
                Guardar
            </button>
        </div>
    </form>
</div>
