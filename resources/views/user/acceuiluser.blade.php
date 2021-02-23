@extends('head.user')
@section('content')
<br> <br>
<center>
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</center>
    <form action="VosReservation" name="form" method="post">
        @csrf
        <input type="hidden" name='utilisateur' value={{$utilisateur}}>
    </form>
    <script type="text/javascript">
        document.forms["form"].submit();
    </script>
@endsection
