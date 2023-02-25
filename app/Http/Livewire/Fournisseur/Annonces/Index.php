<?php

namespace App\Http\Livewire\Fournisseur\Annonces;

use App\Models\annonce;
use App\Models\company;
use Livewire\Component;

class Index extends Component
{
    public $annonces;
    public $title, $nature, $salary, $description, $company, $categorie, $qualification, $duration, $responsibility, $etudes;

    public function mount() {
        $this->get_annonces();
    }

    public function add() {
        $this->validate();
        annonce::create([
            "title" => $this->title,
            "nature" => $this->nature,
            "salary" => $this->salary,
            "description" => $this->description,
            "company_id" => $this->company,
            "categorie_id" => $this->categorie,
            "responsibility" => $this->responsibility,
            "qualification" => $this->qualification,
            "duration" => $this->duration,
            "niveau_etude" => $this->etudes,
            "user_id" => auth()->user()->id
        ]);
        $this->get_annonces();

    }




    protected $rules = [
        'title' => 'required',
        'nature' => 'required',
        'salary' => 'required',
        'salary' => 'required',
        'description' => 'required',
        'company' => 'required',
        'categorie' => 'required',
        'qualification' => 'required',
        'duration' => 'required',
        'responsibility' => 'required',
        'etudes' => 'required',
    ];

    public function get_annonces() {
        $a = annonce::all()->where("user_id",auth()->user()->id);
        $this->annonces = $a;
    }


    public function render()
    {
        return view('livewire.fournisseur.annonces.index');
    }
}
