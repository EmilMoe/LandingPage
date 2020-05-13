<?php

namespace EmilMoe\LandingPage\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public $linkedin;
    public $facebook;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $linkedin = null, string $facebook = null)
    {
        $this->linkedin = $linkedin;
        $this->facebook = $facebook;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('LandingPage::footer');
    }
}
