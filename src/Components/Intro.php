<?php

namespace EmilMoe\LandingPage\Components;

use Illuminate\View\Component;

class Intro extends Component
{
    public $title;
    public $image;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $image, string $id = null)
    {
        $this->title = $title;
        $this->image = $image;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('LandingPage::components.intro');
    }
}
