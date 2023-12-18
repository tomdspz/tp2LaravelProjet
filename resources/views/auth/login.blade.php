@extends("template")
            
@section("content")
    <form class="login" action="{{route("login")}}" method="post">
        @csrf
        <h2>Se connecter</h2>
        <label>Identifiant:</label>
        <input class ="inputform" type="email" name="email" required placeholder="Email" /><br />
        <label for="name">Mot de passe:</label>
        <input type="password" name="password" required placeholder="password" /><br />
        {{-- Remember me<input type="checkbox" name="remember"   /><br /> --}}
        <input class="btnform" type="submit" value="Connexion" /><br />
        <span class="inscription">Vous n'avez pas de compte  ? <a href="{{route("register")}}">Créez-en un</a></span>
    </form>
    
@endsection