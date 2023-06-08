<?php

namespace App\View\Components\Admin\Button;

use Exception;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Add extends Component
{
    /**
     * Create a new component instance.
     */
    public $url;
    public $dta;
    public $dto;
    public function __construct($url = null, $dta = null, $dto = null)
    {
        if (!$url) throw new Exception("Button Memerlukan URL");
        $this->url = url($url);
        $this->dta = $dta;
        $this->dto = $dto;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.button.add');
    }
}
