<?php

namespace EmilMoe\LandingPage\Components;

use Illuminate\View\Component;

class Contact extends Component
{
    public $company;
    public $street;
    public $city;
    public $cvr;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $company,
        string $street,
        string $city,
        string $cvr)
    {
        $this->company = $company;
        $this->street = $street;
        $this->city = $city;
        $this->cvr = $cvr;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('LandingPage::components.contact');
    }
}
