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
</style>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<form action="ListeAttente" name="form" method="post">
    @csrf
    <input type="hidden" name='utilisateur' value={{$utilisateur}}>
</form>
<script type="text/javascript">
    document.forms["form"].submit();

</script>
