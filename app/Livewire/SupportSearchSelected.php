<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Buyer;
use App\Models\Office;



class SupportSearchSelected extends Component
{

    public $buyer;
    public $selectedId = null;

    protected $listeners = ['selectedData'];
    public $officesWithSerials = [];


    public function selectedData($buyerId)
    {   
        $this->isSelected = true;
        $this->buyer = Buyer::with('offices.productUnits')->find($buyerId);

        $this->officesWithSerials = $this->buyer->offices
            ->groupBy('office_name')
            ->map(function ($offices){
                return $offices->flatMap->productUnits
                    ->pluck('serial_number')
                    ->unique()
                    ->values();
            })
            ->toArray();
    }


    public function render()
    {   
        
        return view('livewire.support-search-selected');
    }
}
