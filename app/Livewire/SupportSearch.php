<?php

namespace App\Livewire;

use App\Models\Buyer;
use App\Models\Office;
use Livewire\Component;

class SupportSearch extends Component
{
    public $query = '';
    public $selectedId = null;
    public $buyer = null;

    public function select($id)
    {   
        $this->selectedId = $id;
        $this->buyer = Buyer::with('offices')->find($id);
        $this->dispatch('selectedData',$id);
    }

    public function render()
    {
        $buyers = [];
        $offices = [];
    
        if(!empty($this->query)){
            $buyers = Buyer::where('name','like',"%{$this->query}%")
                        ->orWhere('email','like',"%{$this->query}%")
                        ->orWhere('phone','like',"%{$this->query}%")
                        ->limit(50)
                        ->get();
            $offices = Office::where('office_name','like',"%{$this->query}%")
                ->orderBy('office_name')
                ->limit(25)
                ->get();
        }



        return view('livewire.support-search',[
            'buyers' => $buyers,
            'offices' => $offices,
        ]);
    }
}
