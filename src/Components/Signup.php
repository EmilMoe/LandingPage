<?php

namespace EmilMoe\LandingPage\Components;

use Illuminate\View\Component;

class Signup extends Component
{
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title = null)
    {
        $this->company = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('LandingPage::components.signup');
    }
}
