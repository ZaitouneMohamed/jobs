@extends("user.master.master")

@section("content")
    my pending jobs
    {{$jobs->count()}}
@endsection
