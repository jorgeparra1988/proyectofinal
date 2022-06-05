<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;
use Livewire\WithFileUploads;
use Cion\TextToSpeech\Facades\TextToSpeech;

use Illuminate\support\Facades\Storage;



class PostComponent extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public $post_id, $image, $title, $body;
    public $view = 'create';

    public $search = '';

    public function render()
    {
        return view('livewire.post-component', [
            'posts' => Post::where('title', 'like', '%' . $this->search . '%')->paginate(3)
        ]);

    }


    public function store()
    {

        $this->validate(['image' => 'required|image|max:2048','title' => 'required', 'body' => 'required']);

        $post = Post::create([
            'image' => $this->image->store('posts', 'public'),
            'title' => $this->title,
            'body' => $this->body
        ]);
        $post->save();

        $this->edit($post->id);
    }

    public function edit($id)
    {
       $post = Post::find($id);

       $this->post_id = $post->id;
       $this->image =($post->get_image);
       $this->title = $post->title;
       $this->body = $post->body;

       $this->view = 'edit';
    }

    public function update()
    {
        $this->validate(['image' => 'required','title' => 'required', 'body' => 'required']);

        $post = Post::find($this->post_id);

        if($this->image){
            Storage::disk('public')->delete($post->image);
            $this->image->store('posts', 'public');
        }

        $post->update([
            'image' => $this->image,
            'title' => $this->title,
            'body' => $this->body
        ]);

        $this->default();
    }

    public function destroy($id)
    {
        Post::destroy($id);
    }

    public function default()
    {
        $this->title = '';
        $this->body = '';
        $this->image = '';

        $this->view = 'create';
    }
}

