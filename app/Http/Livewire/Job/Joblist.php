<?php

namespace App\Http\Livewire\Job;

use App\Models\annonce;
use Livewire\Component;

class Joblist extends Component
{
    public $full_time_jobs , $part_time_jobs;

    public function mount() {
        $this->get_full_time_jobs();
        $this->get_part_time_jobs();
    }

    public function get_full_time_jobs() {
        $a = annonce::all()->where("nature","Full time")->take(5);
        $this->full_time_jobs = $a;
    }
    public function get_part_time_jobs() {
        $a = annonce::all()->where("nature","Part time")->take(5);
        $this->part_time_jobs = $a;
    }

    public function render()
    {
        return view('livewire.job.joblist');
    }
}
