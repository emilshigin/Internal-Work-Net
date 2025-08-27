<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Buyer;
use App\Models\Office;



class SupportSearchSelected extends Component
{

    public $buyer;
    public $isSelected = false;

    protected $listeners = ['selectedData'];
    public $serialsByOffice = [];


    public function selectedData($buyerId)
    {   
        $this->isSelected = true;
        $this->buyer = Buyer::with('offices.productUnits')->find($buyerId);

        // return early     
        if (!$this->buyer) {
            $this->serialsByOffice = [];
            return;
        }

        $this->serialsByOffice = $this->buyer->offices->map(function ($office){
                $serials = $office->productUnits
                    ->pluck('serial_number')
                    ->unique()
                    ->values();

                    return ['office' => $office,'serials' => $serials];
            })
            ->toArray();
    }


    public function render()
    {   
        
        return view('livewire.support-search-selected');
    }
}
