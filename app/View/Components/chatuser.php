<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class chatuser extends Component
{
    /**
     * Create a new component instance.
     */
    public $users;
    public function __construct()
    {
        $this->users = $this->getUser();
    }

    public function getUser(){
        return User::whereNotIn('id',[Auth::user()->id])->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.chatuser');
    }
}
