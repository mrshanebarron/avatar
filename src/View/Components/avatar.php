<?php

namespace MrShaneBarron\avatar\View\Components;

use Illuminate\View\Component;

class avatar extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('ld-avatar::components.avatar');
    }
}
