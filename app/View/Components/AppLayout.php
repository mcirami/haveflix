<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public $apiErrors;
    public $userInfo;

    public function __construct($apiErrors, $userInfo) {
        $this->apiErrors    = $apiErrors;
        $this->userInfo     = $userInfo;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
