@extends('layouts.master')

@section('content')

    <h1>main content here</h1>

    <div class="col-md-4">
        <select class="form-control changeLang">
            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
            <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>arabic</option>
        </select>
    </div>



@endsection

@section("scripts")
<script type="text/javascript">

    var url = "{{ route('changeLang') }}";
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });

</script>
@endsection
