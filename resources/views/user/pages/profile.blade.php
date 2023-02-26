@extends("user.master.master")

@section("content")
<h1>mon compte</h1>
<H2>mes information</H2>
<br>
name : {{auth()->user()->name}}
@endsection
