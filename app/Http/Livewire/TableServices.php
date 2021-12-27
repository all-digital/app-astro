<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TableServices extends Component
{
    public $services = "SERVIÇOS";

    public function render()
    {
        return view('livewire.table-services');
    }
}
