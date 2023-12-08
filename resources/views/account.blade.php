@extends("template")
            
@section("content")
    <h1>
        Account
    </h1>

    <div>
        <h2>Ajout de photos</h2>
        <form method="post" action="/account">
            <div class="champ">
                <label for="pseudo">Entrez un pseudonyme : </label>
                <input type="text" id="pseudo">
            </div>
            <div class="champ">
                <label for="pass">Entrez un mot de passe :</label>
                <input type="password" id="pass">
            </div>
            <div class="champ">
                <label for="mail">Entrez un mail :</label>
                <input type="email" id="mail">
            </div>
        </form>
    </div>


@endsection