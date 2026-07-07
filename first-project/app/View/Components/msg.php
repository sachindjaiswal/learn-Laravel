<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class msg extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $course;
    public $age ;
    public function __construct($name ,$course , $age)
    {
        //
        $this->name=$name;
        $this->course=$course;
        $this->age=$age;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.msg');
    }
}
