<?php

namespace App\Http\Livewire\Job;

use App\Models\annonce;
use Livewire\Component;
use Livewire\WithPagination;


class AllJobs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.job.all-jobs',[
            'annonces' => annonce::paginate(10),
        ]);
    }
}
