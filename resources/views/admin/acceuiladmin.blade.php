<style>
    .loader {
        position: fixed;
        z-index: 99;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .loader>img {
        width: 100px;
    }

    .loader.hidden {
        animation: fadeOut 1s;
        animation-fill-mode: forwards;
    }

    @keyframes fadeOut {
        100% {
            opacity: 0;
            visibility: hidden;
        }
    }

    .thumb {
        height: 100px;
        border: 1px solid black;
        margin: 10px;
    }
    .aligner {
        text-align: center;
    }
</style>
{{-- Chargement qui sert à la redirection de l'admin vers les différents pages --}}
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
{{-- la variable $action contient une valeur int qui permettra d'acceder aux différents fichier --}}
@switch($action)
    @case(1)
    <form action="/ListeAttente" name="form" method="post">
        @csrf
        <input type="hidden" name='id' value={{$id}}>
    </form>
    <script type="text/javascript">
        document.forms["form"].submit();

    </script>
        @break
    @case(2)
    <form action="/ListeUtilisateur" name="form" method="post">
        @csrf
        <input type="hidden" name='id' value={{$id}}>
    </form>
    <script type="text/javascript">
        document.forms["form"].submit();
    </script>
        @break
        @case(3)
        <form action="/ListeReservation" name="form" method="post">
            @csrf
            <input type="hidden" name='id' value={{$id}}>
        </form>
        <script type="text/javascript">
            document.forms["form"].submit();
        </script>
            @break
        @case(4)
        <form action="/ListePlace" name="form" method="post">
            @csrf
            <input type="hidden" name='id' value={{$id}}>
        </form>
        <script type="text/javascript">
            document.forms["form"].submit();
        </script>
            @break
    @default

@endswitch
{{-- @if (!isset($liste))
    <form action="/ListeAttente" name="form" method="post">
        @csrf
        <input type="hidden" name='id' value={{$id}}>
    </form>
@else
    <form action="/ListeUtilisateur" name="form" method="post">
        @csrf
        <input type="hidden" name='id' value={{$id}}>
    </form>
@endif --}}

<script type="text/javascript">
    document.forms["form"].submit();

</script>
