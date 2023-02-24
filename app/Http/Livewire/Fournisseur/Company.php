<?php

namespace App\Http\Livewire\Fournisseur;

use App\Models\company as ModelsCompany;
use Livewire\Component;

class Company extends Component
{

    public $companys;
    public $name , $adresse , $contact;

    public function render()
    {
        return view('livewire.fournisseur.company');
    }

    public function add() {
        $this->validate();
        ModelsCompany::create([
            "name" => $this->name,
            "adresse" => $this->adresse,
            "user_id" => auth()->user()->id,
            "contact_info" => $this->contact
        ]);
        $this->get_companys();
        $this->clear();
    }

    public function clear() {
        $this->name= '';
        $this->adresse= '';
        $this->contact= '';
    }

    public function mount() {
        $this->get_companys();
    }


    protected $rules = [
        'name' => 'required',
        'adresse' => 'required',
        'contact' => 'required',
    ];

    public function get_companys() {
        $aa = ModelsCompany::all();
        $this->companys = $aa;
    }

}
