<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Buyer;
use App\Models\Office;



class SupportSearchSelected extends Component
{

    public $buyer;

    protected $listeners = ['selectedData'];

    public function selectedData($id)
    {
        $this->buyer = Buyer::find($id);
    }


    public function render()
    {
        return view('livewire.support-search-selected');
    }
}
