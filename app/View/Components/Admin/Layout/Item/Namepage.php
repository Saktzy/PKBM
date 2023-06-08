<?php

namespace App\View\Components\admin\layout\Item;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Namepage extends Component
{


    public $namepage;
    public function __construct($namepage)
    {
        $this->namepage = $namepage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.layout.item.namepage');
    }
}
