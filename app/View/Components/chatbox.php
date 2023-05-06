<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class chatbox extends Component
{
    /**
     * Create a new component instance.
     */
    public  $name;
    public  $email;
    public  $users;
    public function __construct($auth,$users)
    {
        $this->name = $auth->name;
        $this->email = $auth->email;
        $this->users = $users;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.chatbox');
    }
}
