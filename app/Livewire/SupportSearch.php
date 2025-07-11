<?php

namespace App\Livewire;

use App\Models\Buyer;
use App\Models\ContactEmail;
use App\Models\ContactPhone;
use App\Models\Office;
use App\Models\ProductUnit;
use Livewire\Component;

class SupportSearch extends Component
{
    public $query = '';
    public $selectedId = null;
    public $buyer = null;

    public function select($buyerId)
    {   
        $this->selectedId = $buyerId;
        $this->buyer = Buyer::with('offices')->find($buyerId); // finds buyer and the associated office
        $this->dispatch('selectedData',$buyerId);
    }

 
    public function render()
    {
        $buyers = [];
        $phone_numbers =[];
        $emails = [];
        $addresses = [];
        $offices = [];
        $productUnit = [];
    
        if(!empty($this->query)){
            $buyers = Buyer::where('name','like',"%{$this->query}%")
                ->limit(10)
                ->get();
            
            $emails = ContactEmail::where('email','like',"%{$this->query}%")
                ->limit(3)
                ->get();
            
            $phone_numbers = ContactPhone::where('phone_number','like',"%{$this->query}%")
                ->limit(3)
                ->get();

            $offices = Office::where('office_name','like',"%{$this->query}%")
                ->orderBy('office_name')
                ->limit(10)
                ->get();

            $productUnit = ProductUnit::with('currentOffice')
                ->where('serial_number','like',"%{$this->query}%")
                ->orderBy('serial_number') 
                ->limit(10)
                ->get();
        }



        return view('livewire.support-search',[
            'buyers' => $buyers,
            'emails' => $emails,
            'phone_numbers' => $phone_numbers,
            'offices' => $offices,
            'productUnit' => $productUnit,
        ]);
    }
}
