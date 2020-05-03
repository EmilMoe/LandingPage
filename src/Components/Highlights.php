<?php

namespace EmilMoe\LandingPage\Components;

use Illuminate\View\Component;

class highlights extends Component
{
    public $title;
    public $id;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, $id = null)
    {
        $this->title = $title;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('LandingPage::components.highlights');
    }
}
