<?php

namespace App\Http\Livewire\Admin;

use App\Models\categorie;
use Livewire\Component;

class Categories extends Component
{
    public $categories , $name;

    public function render()
    {
        return view('livewire.admin.categories');
    }

    public function mount() {
        $this->get_categories();
    }

    public function get_categories() {
        $aa = categorie::all();
        $this->categories = $aa;
    }

    public function add()
    {
        $this->validate();
        categorie::create([
            "name" => $this->name
        ]);
        $this->get_categories();
        $this->name = "";
    }
    
    public function delete($id){
        categorie::find($id)->delete();
        $this->name = "";
        $this->get_categories();

    }


    protected $rules = [
        'name' => 'required',
    ];

    
}
