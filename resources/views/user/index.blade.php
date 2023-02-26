@extends("user.master.master")

@section("content")
    <div class="container">

        <h2>user dashboard</h2>

        @foreach (auth()->user()->annonces as $a )
            <h1>{{$a->id}}</h1>
        @endforeach
</div>
@endsection
