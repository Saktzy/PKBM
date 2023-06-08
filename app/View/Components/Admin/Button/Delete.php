<?php

namespace App\View\Components\Admin\Button;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Delete extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $id = null, public $path = null)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.button.delete');
    }
}
