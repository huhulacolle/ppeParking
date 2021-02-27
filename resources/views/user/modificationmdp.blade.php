<style>
    .login-form {
        width: 340px;
        margin: 50px auto;
        font-size: 15px;
    }

    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .login-form h2 {
        margin: 0 0 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
    }

</style>
@extends('head.user')
@section('content')
<div class="login-form">
    @if (isset($_POST['error']) && $_POST['error'] == 2)
        <?php Log::debug($_POST['error']); ?>
        <?php Log::debug($_POST['error']); ?>
        <center>
            <p class="bg-light border border-danger">
                le mot de passe ne correspond pas
            </p>
        </center>
    @elseif(isset($_POST['error']) && $_POST['error'] == 1)
    <?php Log::debug($_POST['error']); ?>
    <center>
        <p class="bg-light border border-danger">
            Votre mot de passe est incorrecte
        </p>
    </center>
    @endif
    <form action="ModificationConfirmation" method="post">
        @csrf
        <input type="hidden" name="iduser" value={{$info[0]}}>
        <h2 class="text-center">Modification du mot de passe</h2>
        <div class="form-group">
            Ancien mot de passe
            <input type="password" name="old" class="form-control" required>
        </div>
        <div class="form-group">
            Nouveau mot de passe
            <input type="password" name="new" class="form-control" required>
        </div>
        <div class="form-group">
            Confirmation mot de passe
            <input type="password" name="new2" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Changer le mot de passe</button>
        </div>
    </form>
</div>
@endsection
