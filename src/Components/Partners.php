<?php

namespace EmilMoe\LandingPage\Components;

use Illuminate\View\Component;

class Partners extends Component
{
    public $partners;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $partners = [], string $id = null)
    {
        $this->partners = $partners;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('LandingPage::components.partners');
    }
}
