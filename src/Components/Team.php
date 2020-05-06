<?php

namespace EmilMoe\LandingPage\Components;

use Illuminate\View\Component;

class Team extends Component
{
    public $members;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $members, string $id = null)
    {
        $this->members = $members;
        $this->title = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('LandingPage::components.team');
    }
}
