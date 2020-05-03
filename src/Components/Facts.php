<?php

namespace EmilMoe\LandingPage\Components;

use Illuminate\View\Component;

class Facts extends Component
{
    public $id;
    public $title;
    public $info;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $info, string $id = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->info = $info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('LandingPage::components.facts');
    }
}
