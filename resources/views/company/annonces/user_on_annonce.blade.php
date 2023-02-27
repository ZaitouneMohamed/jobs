@extends('company.master.master')

@section("content")

    @foreach ($annonce->users as $item )

        <h1>{{ $item->name }}</h1>
        <h1>{{ $item->info->experience }}</h1>

    @endforeach

@endsection



