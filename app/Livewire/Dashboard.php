<?php

namespace App\Livewire;


use App\Models\Files;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Attributes\Lazy;


class Dashboard extends Component
{
    use WithPagination;
    #[Title('Dashboard')]
    #[Url]
    public $search = '';
    public function render()
    {
        $user = auth()->user();
        $files = Files::select('*')->where('user_id', $user->id)->where('title', 'ilike', '%' . $this->search . '%')->orderBy('id', 'desc')->cursorPaginate(20);
        return view('livewire.dashboard', ['files' => $files]);
    }


}
