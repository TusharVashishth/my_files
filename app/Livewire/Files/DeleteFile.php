<?php

namespace App\Livewire\Files;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Files;

class DeleteFile extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        return view('livewire.files.delete-file');
    }

    public function delete()
    {
        try {
            $file = Files::find($this->id);
            if ($file->user_id != auth()->user()->id) {
                session()->flash("error", "Something went wrong!");
                $this->redirectRoute("dashboard", navigate: true);
            }
            // * Delete file from storage
            Storage::delete($file->image);
            Files::where("id", $this->id)->delete();
            session()->flash("success", "File deleted successfully!");
            return $this->redirectRoute("dashboard", navigate: true);
        } catch (\Exception $err) {
            session()->flash("error", "Something went wrong!");
            $this->redirectRoute("dashboard", navigate: true);
        }

    }
}
