<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $subtitle;
    public $description;
    public function __construct($title, $subtitle,$description)
    {
        //
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }

    // component method:
    public function addNumber($a){
        return $a + 30;
    }
}
