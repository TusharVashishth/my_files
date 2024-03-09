<?php

namespace App\Livewire\Files;

use App\Models\Files;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddFile extends Component
{
    use WithFileUploads;
    public $title;
    public $image;
    public function render()
    {
        return view('livewire.files.add-file');
    }

    public function store()
    {
        $this->validate([
            "title" => 'required|min:2|max:100',
            "image" => 'required|image|mimes:png,jpg,svg,gif,jpeg,webp'
        ]);

        $user = Auth::guard('web')->user();
        $filename = $this->image->store("images_" . $user->id);
        Files::create(["title" => $this->title, "image" => $filename, 'user_id' => $user->id]);
        session()->flash("success", "File uploaded successfully!");
        $this->dispatch('file-added');
        $this->redirectRoute('dashboard', navigate: true);
    }
}
