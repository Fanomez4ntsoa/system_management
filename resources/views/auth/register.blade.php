<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
    <title>Inscription</title>
    <link href="../../assets/css/app.css" rel="stylesheet">
</head>
<body>
    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');" >
    <div class="authentification-mask gradient-custom-3">
        <div class="authentification-container">
            <div class="authentification-row">
                <div class="authentification-row-column">
                    <div class="authentification-card" style="border-radius: 15px;">
                        <div class="authentification-card-body">
                            <h2 class="authentification-register-title">CRÉATION D'UN COMPTE</h2>
                            <form>
                                <div class="authentification-form-outline">
                                    <input type="text" id="" class="authentification-form-control" placeholder="Entrez votre Nom"/>
                                </div>
                                <div class="authentification-form-outline">
                                    <input type="text" id="" class="authentification-form-control" placeholder="Entrez votre Prénom"/>
                                </div>
                                <div class="authentification-form-outline">
                                    <input type="email" id="" class="authentification-form-control" placeholder="Entrez votre Adresse Email" />
                                </div>
                                <div class="authentification-form-outline">
                                    <input type="password" id="" class="authentification-form-control" placeholder="Entrez votre Mot de Passe" />
                                </div>
                                <div class="authentification-form-outline">
                                    <input type="password" id="" class="authentification-form-control" placeholder="Confirmez votre Mot de Passe" />
                                </div>
                                <div class="authentification-form-terms">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3cg">
                                            Je suis d'accord avec toutes les déclarations contenues dans <a href="#!" class="text-body"><u>Conditions générales d'utilisation</u></a>
                                        </label>
                                </div>
                                <div class="authentification-button">
                                    <button type="button"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">S'inscrire</button>
                                </div>
                                <p class="authentification-login-text">Vous avez déjà un compte ? 
                                    <a href="{{ route('login') }}" class="authentification-login-links"><u>Se connecter ici</u></a>
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