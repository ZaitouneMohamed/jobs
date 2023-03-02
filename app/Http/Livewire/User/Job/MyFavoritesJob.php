<?php

namespace App\Http\Livewire\User\Job;

use Livewire\Component;

class MyFavoritesJob extends Component
{
    public $jobs;

    public function mount() {
        $this->get_jobs();
    }

    public function get_jobs()
    {
        $a = auth()->user()->fav_annonces;
        $this->jobs = $a;
    }

    public function render()
    {
        return view('livewire.user.job.my-favorites-job');
    }
}
