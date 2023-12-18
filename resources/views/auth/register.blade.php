@extends("template")
            
@section("content")
    <form class="login2" action="{{route("register")}}" method="post">
        @csrf
        <h2>Inscription</h2>
        <label>Nom:</label>
        <input class ="inputform"type="text" name="name" required placeholder="Name" /><br />
        <label>E-mail:</label>
        <input type="email" name="email" required placeholder="Email" /><br />
        <label>Mot de Passe:</label>
        <input type="password" name="password" required placeholder="password" /><br />
        <label>Confirmez le mot de passe:</label>
        <input type="password" name="password_confirmation" required placeholder="password" /><br />
        <input type="submit" value="Inscription"/><br />

        <span class="inscription">Déjà un compte  ? <a href="{{route("login")}}">Connectez vous</a></span>
    </form>

@endsection