<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\LivewireFilepond\WithFilePond;

class PostCrud extends Component
{
  use WithFileUploads;

  public $progress, $posts, $title, $content, $postId, $image = [], $search;
  public $isCreate = '', $isEdit = false, $isShow = false;
  public $editPostId = null;


  protected $queryString = ['search'];

  public function render()
  {
    $this->posts = Post::where('title', 'like', '%' . $this->search . '%')->get();
    return view('livewire.post-crud');
  }

  public function resetInput()
  {
    $this->title = '';
    $this->content = '';
    $this->postId = null;
    $this->image = null;
    $this->isCreate = '';
    $this->isEdit = false;
    $this->isShow = false;
  }

  public function create()
  {
    $this->resetInput();
    $this->isCreate = 'Save';
  }

  public function store()
  {
    $this->validate([
      'title' => 'required|string|max:255',
      'content' => 'nullable|string',
      'image' => 'nullable|image|max:2048', // Max 2MB
    ]);


    foreach ($this->image as $img) {
      $img->store(path: 'posts');
    }

    $imagePath = $this->image ? $this->image->storeAs('posts', $this->image->getClientOriginalName(), 'public') : null;


    Post::create([
      'title' => $this->title,
      'content' => $this->content,
      'image' => $imagePath ? str_replace('public/', '', $imagePath) : null,
    ]);

    $this->resetInput();
    session()->flash('message', 'Post created successfully!');
  }

  // public function edit($id)
  // {
  //   $post = Post::findOrFail($id);
  //   $this->postId = $id;
  //   $this->title = $post->title;
  //   $this->content = $post->content;
  //   $this->image = null; // Reset file input
  //   $this->isEdit = true;
  //   $this->isCreate = 'Update';
  // }

  public function edit($postId)
  {
    $post = Post::find($postId);
    $this->editPostId = $post->id;
    $this->title = $post->title;
    $this->content = $post->content;
  }

  public function update()
  {
    $this->validate([
      'title' => 'required|string|max:255',
      'content' => 'nullable|string',
      'image' => 'nullable|image|max:2048',
    ]);

    $post = Post::findOrFail($this->postId);

    $imagePath = $this->image ? $this->image->store('public/posts') : $post->image;

    $post->update([
      'title' => $this->title,
      'content' => $this->content,
      'image' => $imagePath ? str_replace('public/', '', $imagePath) : $post->image,
    ]);

    $this->resetInput();
    session()->flash('message', 'Post updated successfully!');
  }

  public function delete($id)
  {
    $post = Post::findOrFail($id);
    if ($post->image) {
      \Storage::delete('public/' . $post->image);
    }
    $post->delete();

    session()->flash('message', 'Post deleted successfully!');
  }

  public function show($id)
  {
    $post = Post::findOrFail($id);
    $this->title = $post->title;
    $this->content = $post->content;
    $this->image = $post->image;
    $this->isShow = true;
  }
}
