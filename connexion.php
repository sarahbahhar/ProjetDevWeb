<?php include('header.php') ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="connexion.css" rel="stylesheet" type="text/css">
        <title>Connexion</title>
    </head>
    <body>
        <div id="d1">
        <form>
            <h1 class="titre">Connexion</h1>
            <div class="utilisateur">
                <input type="email" id="email" name="email" placeholder="Email" /><br><br>
                <input type="password" id="password" name="password" placeholder="Mot de passe"><br><br>
                <div id="err"></div><br>
            </form>
            </div>
        <div class="bouton">
            <button type="button" onclick="f()">Se connecter</button>
            <br>
            <br>
          </div>
        <div class="bouton">
            <button onclick="window.location='inscription.php'">S'inscrire</button>
          </div>
        </br>
        </div>

        <script>
            function f() {
                var xhttp = new XMLHttpRequest();
              
            xhttp.onreadystatechange=function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.response==0){
                        document.getElementById("err").innerHTML = "Email ou mot de passe incorrecte";
                    }
                    else{
                        var profil = "visuelProfil.php?id_user="+this.response;
                        window.location = profil;
                    }
                    
                }
              };
              var email=document.getElementById('email').value;
              var password=document.getElementById('password').value;
              xhttp.open("POST", "check.php?email=" + email +"&password=" + password, true);
              xhttp.send();
            }
            </script>
    </body>

</html>
