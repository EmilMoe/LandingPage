<?php

namespace EmilMoe\LandingPage\Components;

use Illuminate\View\Component;

class HighlightBox extends Component
{
    public $title;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('LandingPage::components.highlight-box');
    }
}
