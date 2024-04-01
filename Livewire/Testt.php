<?php

namespace App\Livewire;

use Livewire\Component;

class Testt extends Component
{
    public function render()
    {
        return view('livewire.testt');
    }

    public $selectedDistrict=null;

    public function upadatedselectedDistrict()
    {
        dd('ok');
    }
    
}
