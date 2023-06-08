<?php

namespace App\View\Components\Front\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navhead extends Component
{
    /**
     * Create a new component instance.
     */
    public $judul;

    public function __construct($judul = null)
    {
        $this->judul = $judul;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.layout.navhead');
    }
}
