<?php

namespace App\View\Components;

use Illuminate\View\Component;

class informacoes_membro extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
//Campos acima das guias
    public $membro;

    public function __construct($membro)
    {
       $this->membro = $membro;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.edit.informacoes_membro');
    }
}
