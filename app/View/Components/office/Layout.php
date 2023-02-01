<?php

namespace App\View\Components\office;

use Illuminate\View\Component;

class Layout extends Component
{

    public $menuLayout;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($menuLayout)
    {
        $this->menuLayout = $menuLayout;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.office.layout');
    }
}
