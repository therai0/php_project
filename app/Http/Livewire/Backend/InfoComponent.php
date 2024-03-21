<?php

namespace App\Http\Livewire\Backend;
use App\Models\Info;

use Livewire\Component;

class InfoComponent extends Component
{

public $datas;


public function mount() {
  $this->datas = Info::first();
//  dd($this->datas);
}

    public function render()
    {
        return view('livewire.backend.infos.index');
    }


}
