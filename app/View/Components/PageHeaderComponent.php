<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageHeaderComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $headerContent;
    public function __construct($headerContent)
    {
        $this->headerContent = $headerContent;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-header-component');
    }
}
