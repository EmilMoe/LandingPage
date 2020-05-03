<?php

namespace EmilMoe\LandingPage\Components;

use Illuminate\View\Component;

class Features extends Component
{
    public $title;
    public $image;
    public $info;
    public $id;
    public $boxes;
    public $imageLeft;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, string $image, string $info, string $id = null, bool $imageLeft = true, array $boxes = [])
    {
        $this->title = $title;
        $this->image = $image;
        $this->info = $info;
        $this->id = $id;
        $this->boxes = $boxes;
        $this->imageLeft = $imageLeft;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('LandingPage::components.features');
    }
}
