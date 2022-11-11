<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animation.css">
    <script src="js/annulation_act.js"></script>
    <title>Animation</title>
</head>
<body>
    <br>
    
    <?php 
        include('bdd.php');
        $aff_animation=$bdd->query("SELECT * FROM animation");
        $aff_activite=$bdd->query("SELECT NOMANIM,HRRDVACT,PRIXACT,HRDEBUTACT,HRFINACT,NOMRESP,PRENOMRESP FROM activite INNER JOIN animation ON activite.CODEANIM=animation.CODEANIM");
        if(!isset($_SESSION['pseudo'])){
    ?><h3>Animations</h3>
    <?php 
        if($aff_animation->rowCount()>0){
            
            while($resultat=$aff_animation->fetch()){
                echo "<div class='contenu'>";
                echo "<div class='box'>";
                echo "<a href='affanimation-va.php'>".$resultat['NOMANIM']."</a><br>";
                echo "<p>Prix : ".$resultat['TARIFANIM']."€</p>";
                echo "<p>Limite d'âge :".$resultat['LIMITEAGE']." ans</p>";
                echo "<p>Difficulté : ".$resultat['DIFFICULTEANIM']."</p>";
                echo $resultat['DESCRIPTANIM']."<br>";
                echo "</div>";
                echo "</div>";
            }
        }
    ?>    
    
    <h3>Activités</h3>
    <?php
    if($aff_activite->rowCount()>0){
        $date = date_create($resultat['DATEACT'])->format('d/m/Y');
        while($resultat=$aff_activite->fetch()){  
            echo "<div class='contenu'>";
            echo "<div class='box'>";
            echo $resultat['NOMANIM']."</a><br>";
            echo "<p>Date de l'activité :</p>".$date."</a>";
            echo "<p>Heure de rendez-vous :</p>".$resultat['HRRDVACT']."</a>";
            echo "<p>Prix :</p>".$resultat['PRIXACT']."</a>";
            echo "<p>Heure de début :</p>".$resultat['HRDEBUTACT']."</a>";
            echo "<p>Heure de fin :</>".$resultat['HRFINACT']."</a>";
            echo "</div>";
            echo "</div>";

    }
}
    ?>
    
    <?php
    }elseif($_SESSION['typeprofil']=="va"){
    ?>
    <h3>Animations</h3>
    <?php 
        if($aff_animation->rowCount()>0){
            
            while($resultat=$aff_animation->fetch()){
                echo "<div class='contenu'>";
                echo "<div class='box'>";
                echo "<a href='affanimation-va.php'>".$resultat['NOMANIM']."</a><br>";
                echo "<p>Prix : ".$resultat['TARIFANIM']."€</p>";
                echo "<p>Limite d'âge :".$resultat['LIMITEAGE']." ans</p>";
                echo "<p>Difficulté : ".$resultat['DIFFICULTEANIM']."</p>";
                echo $resultat['DESCRIPTANIM']."<br>";
                echo "</div>";
                echo "</div>";
            }
        }
    ?>
    <h3>Activités</h3>
    <?php
    if($aff_activite->rowCount()>0){
        $date = date_create($resultat['DATEACT'])->format('d/m/Y');
        while($resultat=$aff_activite->fetch()){  
            echo "<div class='contenu'>";
            echo "<div class='box'>";
            echo $resultat['NOMANIM']."</a><br>";
            echo "<p>Date de l'activité :</p>".$date."</a>";
            echo "<p>Heure de rendez-vous :</p>".$resultat['HRRDVACT']."</a>";
            echo "<p>Prix :</p>".$resultat['PRIXACT']."</a>";
            echo "<p>Heure de début :</p>".$resultat['HRDEBUTACT']."</a>";
            echo "<p>Heure de fin :</>".$resultat['HRFINACT']."</a>";
            echo "</div>";
            echo "</div>";

    }
}
    ?>
    <h3>Mes activités</h3>
     <?php
        }elseif($_SESSION['typeprofil']=="en"){
            

    ?>
   

     <h3>Animations<a href="formulaire_ajtanim.php" title="Ajouter une animation" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg></a></h3>
    <?php
     if ($aff_animation->rowCount()>0){
        while($resultat=$aff_animation->fetch()){
            echo "<div class='contenu'>";
            echo "<div class='box'>";
            echo "<a href='affanimation-va.php'>".$resultat['NOMANIM']."</a><br>";
            echo "<p>Prix : ".$resultat['TARIFANIM']."€</p>";
            echo "<p>Limite d'âge :".$resultat['LIMITEAGE']." ans</p>";
            echo "<p>Difficulté : ".$resultat['DIFFICULTEANIM']."</p>";
            echo $resultat['DESCRIPTANIM']."<br>";
            echo "<a href='#'><button>Modifier</button></a>";
            echo "</div>";
            echo "</div>";
        }
    }
    ?><h3>Activités<a href="formulaire_ajtactivite.php" title="Ajouter une activité" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg></a></h3>
        <?php
    if($aff_activite->rowCount()>0){
        $date = date_create($resultat['DATEACT'])->format('d/m/Y');
        while($resultat=$aff_activite->fetch()){  
            echo "<div id='contenu' class='contenu'>";
            echo "<div class='box'>";
            echo $resultat['NOMANIM']."</a><br>";
            echo "<p>Date de l'activité :</p>".$date."</a>";
            echo "<p>Heure de rendez-vous :</p>".$resultat['HRRDVACT']."</a>";
            echo "<p>Prix :</p>".$resultat['PRIXACT']."</a>";
            echo "<p>Heure de début :</p>".$resultat['HRDEBUTACT']."</a>";
            echo "<p>Heure de fin :</>".$resultat['HRFINACT']."</a><br>";
            echo "<button onclick='remove()'>Annuler</button>";
            echo "</div>";
            echo "</div>";

    }
}
    ?>
    <?php }
    ?>
        
</body>
</html>