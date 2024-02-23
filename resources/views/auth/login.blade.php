<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
    <title>Se Connecter</title>
    <link href="../../assets/css/app.css" rel="stylesheet">
</head>
<body>
    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="authentification-mask gradient-custom-3">
            <div class="authentification-container">
                <div class="authentification-row">
                    <div class=".authentification-login-row-column">
                        <div class="authentification-card" style="border-radius: 15px;">
                            <div class="authentification-card-body">
                                <h2 class="authentification-title">SE CONNECTER</h2>
                                <p class="authentification-title-text">Veuillez saisir votre adresse email et votre mot de passe !</p>
                                <form action="{{ route('login.post') }}" method="POST">
                                    @csrf
                                    <div class="authentification-form-outline">
                                        <input type="email" name="email" class="authentification-form-control" placeholder="Entrez votre Adresse Email" />
                                    </div>
                                    <div class="authentification-form-outline">
                                        <input type="password" name="password" class="authentification-form-control" placeholder="Entrez votre Mot de Passe" />
                                    </div>
                                    <div class="authentification-button">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Se connecter</button>
                                    </div>
                                    <p class="authentification-login-text">Vous n'avez pas encore de compte ? 
                                        <a href="{{ route('register') }}" class="authentification-login-links"><u> S'inscrire</u></a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js" ></script>
</body>
</html>