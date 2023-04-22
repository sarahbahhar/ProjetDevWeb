<?php
    require('header.php');
    $servername ="localhost";
    $username ="root";
    $password = "";
    $bdd = new PDO("mysql:host=$servername;dbname=miam;", $username, $password);
    $nouvellerecette=$bdd->query('SELECT * FROM form_recette WHERE traitement="Validé" AND type_repas="Dessert"');
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="liste.css" rel="stylesheet" type="text/css">
        <title>Desserts</title>
    </head>
    <body>
        <h1 class="titre">Desserts</h1>
        <section class="recettes">
            <?php
                if($nouvellerecette->rowCount()>0){
                    while($r=$nouvellerecette->fetch()){
                        ?>
                        <div class="recette">
                            <img src="<?php echo isset($r['image']) ? $r['image'] : ''; ?>" alt="Image de la recette">
                            <p><a href="visuelrecette.php?id=<?php echo $r['id']?>"><?php echo $r['nom'];?></a><?php echo " "; echo $r['auteur']?></p>
                        </div>
                        <?php
                    }
                }
                else{
                    ?>
                    <p>Aucune recette trouvée</p>
                    <?php
                }
            ?>

        </section>
    </body>
</html>
