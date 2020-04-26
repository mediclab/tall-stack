<?php

namespace App\Http\Livewire\Users;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class Grid extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.users.grid', [
            'users' => User::query()->paginate(15)
        ]);
    }
}
