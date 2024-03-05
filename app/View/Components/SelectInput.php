<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SelectInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $name = '',  public $label = '', public $items = [])
    {
        $this->name = $name;
        $this->label = $label;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-input');
    }
}
