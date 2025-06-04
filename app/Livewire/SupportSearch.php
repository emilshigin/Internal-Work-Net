<?php

namespace App\Livewire;

use App\Models\Buyer;
use Livewire\Component;

class SupportSearch extends Component
{
    public $query = '';
    
    public function render()
    {
        $buyers = [];
        $products = [];
        
        if(!empty($this->query)){
            $buyers = Buyer::where('name','like',"%{$this->query}%")
                        ->orWhere('email','like',"%{$this->query}%")
                        ->get();
        }

        return view('livewire.support-search',[
            'buyers' => $buyers,
        ]);
    }
}
