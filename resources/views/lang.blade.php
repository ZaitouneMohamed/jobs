<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
    <div class="dropdown-menu rounded-0 m-0">
        <a class="dropdown-item">ar</a>
        <a class="dropdown-item">en</a>
    </div>
</div>
<form action="{{route('changeLang')}}" id="ar_frm">
    @csrf
    <input type="hidden" name="lang" value="ar">    
</form>
<form action="{{route('changeLang')}}" id="en_frm">
    @csrf
    <input type="hidden" name="lang" value="en">    
</form>

<script>


</script>