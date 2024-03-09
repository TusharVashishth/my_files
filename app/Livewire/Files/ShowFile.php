<?php

namespace App\Livewire\Files;

use Livewire\Component;
use App\Models\Files;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Lazy;

#[Lazy]
class ShowFile extends Component
{
    #[Title('Show Image')]
    #[Layout('components.layouts.app')]
    public $id;
    public function mount($id)
    {
        $this->id = $id;

    }


    public function render()
    {

        $file = Files::find($this->id);
        return view('livewire.files.show-file', ["file" => $file]);
    }
}
