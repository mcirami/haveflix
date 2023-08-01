<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoJoin extends Component
{

    public $apiErrors;
    public $userInfo;

    /**
     * Create a new component instance.
     */
    public function __construct($apiErrors, $userInfo)
    {
        $this->apiErrors    = $apiErrors;
        $this->userInfo     = $userInfo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.video-join');
    }
}
