@extends("user.master.master")

@section("content")
<h1>mon compte</h1>
<H2>mes information</H2>
<br>
name : {{auth()->user()->name}} <br>
email : {{auth()->user()->email}} <br>
@if (auth()->user()->info)
    ville : {{auth()->user()->info->ville}}
    telephone : {{auth()->user()->info->telephone}}
    sexe : {{auth()->user()->info->sexe}}
    fonction : {{auth()->user()->info->fonction}}
    experience : {{auth()->user()->info->experience}}
    
@else
    <button class="btn btn-danger">add info</button>
@endif
@endsection
