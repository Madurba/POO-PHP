<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="description" content="Exemples POO en PHP - basé sur le MOOC POO - PHP OpenClassrooms">
        <meta name="keywords" content="POO, PHP, Bootstrap">
        <meta name="author" content="Christophe Malo">
            
        <title>POO en PHP</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Section Contenu
        ================================================== -->
        <section class="container">

            <section class="row">
                <h1 class="text-center">Exemples POO - PHP</h1>     
                <p class="col-sm-12">
                    <?php
                    include_once 'classes/Personnage.php';
                    $perso1 = new Personnage();                     // Création de l'objet Personnage - Création d'une instance de la classe Personnage
                    $perso2 = new Personnage();                     // Création d'un 2ème personnage
                    
                    $perso1->setForce(10);
                    $perso1->setExperience(2);
                    
                    $perso2->setForce(90);
                    $perso2->setExperience(58);
                    
                    $perso1->parler();                              // Appel de la méthode test parler()
                    
                    $perso1->frapper($perso2);                      // Le personnage 1 frappe le personnage 2
                    $perso1->gagnerExperience();                    // Le personnage 1 gagne de l'expérience
                    
                    $perso2->frapper($perso1);                      // Le personnage 2 frappe le personnage 1
                    $perso2->gagnerExperience();                    // Le personnage 2 gagne de l'expérience
                    
                    $perso1->afficherExperience();                  // Affiche l'expérience
                    ?>
                </p>
            </section>

        </section>
    </body>
</html>
