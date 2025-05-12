<?php

$x = rand(0, 3);
$images = [
    [
        "url" => "image1.jpg",
        "alt" => "Mon image 1"
    ],
    [
        "url" => "image2.jpg",
        "alt" => "Mon image 2"
    ],
    [
        "url" => "image3.jpg",
        "alt" => "Mon image 3"
    ],
    [
        "url" => "image4.jpg",
        "alt" => "Mon image 4"
    ],
];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login TP</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="image">
            <img src="assets/images/backgrounds/<?php echo $images[$x]["url"]; ?>" alt="<?php echo $images[$x]["alt"]; ?>">
        </div>
        <div class="form_zone">
            <div class="container">
                <div class="logo">
                    <img src="assets/images/logo/LogoTP.png" alt="Logo">
                </div>
                <div class="welcome">
                    <h1>Enregistrez-vous gratuitement</h1>
                </div>
                <div class="help_text">
                    Pour vous enregistrer, merci de saisir vos informations ci-dessous :
                </div>
                <div class="form_login">
                    <form action="statement.php" method="POST">
                        <div class="input email">
                            <label for="email">Adresse email de connexion</label>
                            <input name="email" type="email" id="email" placeholder="Ex: johndoe@gmail.com" required autofocus autocomplete>
                        </div>
                        <div class="input password">
                            <label for="password">Mot de passe</label>
                            <input name="pass" type="password" id="password" placeholder="Votre mot de passe" required autocomplete>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18" fill="none">
                                <path
                                    d="M8 1.45999C8.97004 1.1518 9.98218 0.996607 11 0.999993C15.182 0.999993 18.028 3.49999 19.725 5.70399C20.575 6.80999 21 7.36099 21 8.99999C21 10.64 20.575 11.191 19.725 12.296C18.028 14.5 15.182 17 11 17C6.818 17 3.972 14.5 2.275 12.296C1.425 11.192 1 10.639 1 8.99999C1 7.35999 1.425 6.80899 2.275 5.70399C2.7935 5.02682 3.37074 4.39671 4 3.82099"
                                    stroke="#526D82" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M14 9C14 9.79565 13.6839 10.5587 13.1213 11.1213C12.5587 11.6839 11.7956 12 11 12C10.2044 12 9.44129 11.6839 8.87868 11.1213C8.31607 10.5587 8 9.79565 8 9C8 8.20435 8.31607 7.44129 8.87868 6.87868C9.44129 6.31607 10.2044 6 11 6C11.7956 6 12.5587 6.31607 13.1213 6.87868C13.6839 7.44129 14 8.20435 14 9Z"
                                    stroke="#526D82" stroke-width="1.5" />
                            </svg>
                        </div>
                        <div class="input password">
                            <label for="confirm_password">Confirmer mot de passe</label>
                            <input name="pass" type="password" id="confirm_password" placeholder="Votre mot de passe" required autocomplete>
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18" fill="none">
                                <path
                                    d="M8 1.45999C8.97004 1.1518 9.98218 0.996607 11 0.999993C15.182 0.999993 18.028 3.49999 19.725 5.70399C20.575 6.80999 21 7.36099 21 8.99999C21 10.64 20.575 11.191 19.725 12.296C18.028 14.5 15.182 17 11 17C6.818 17 3.972 14.5 2.275 12.296C1.425 11.192 1 10.639 1 8.99999C1 7.35999 1.425 6.80899 2.275 5.70399C2.7935 5.02682 3.37074 4.39671 4 3.82099"
                                    stroke="#526D82" stroke-width="1.5" stroke-linecap="round" />
                                <path
                                    d="M14 9C14 9.79565 13.6839 10.5587 13.1213 11.1213C12.5587 11.6839 11.7956 12 11 12C10.2044 12 9.44129 11.6839 8.87868 11.1213C8.31607 10.5587 8 9.79565 8 9C8 8.20435 8.31607 7.44129 8.87868 6.87868C9.44129 6.31607 10.2044 6 11 6C11.7956 6 12.5587 6.31607 13.1213 6.87868C13.6839 7.44129 14 8.20435 14 9Z"
                                    stroke="#526D82" stroke-width="1.5" />
                            </svg>
                        </div>
                        <div class="submit">
                            <input type="submit" value="S'inscrire">
                        </div>
                    </form>
                </div>
                <div class="register_zone">
                    <a href="login.php">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>