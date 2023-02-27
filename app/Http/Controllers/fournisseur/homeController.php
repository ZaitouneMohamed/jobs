<?php

namespace App\Http\Controllers\fournisseur;

use App\Http\Controllers\Controller;
use App\Models\annonce;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function user_pending_on_job($id)
    {
        $annonce = annonce::find($id);
        return view('company.annonces.user_on_annonce',compact('annonce'));
    }
}
