<?php

namespace EmilMoe\LandingPage\Components;

use Illuminate\View\Component;

class Process extends Component
{
    public $title;
    public $info;
    public $steps;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $info, array $steps = [], string $id = null)
    {
        $this->title = $title;
        $this->info = $info;
        $this->steps = $steps;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('LandingPage::components.process');
    }
}
