<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulaire_animation.css">
    <title>Formulaire animation</title>
</head>
<body>
<center>
    <form method='POST' action='ajt_animation.php'>
        <h2>Création d'une animation</h2> 
            <label>Code animation :</label><input type="text" name="codeanim"><br>
            <label>Code type animation :</label>
            <select name="codetypeanim">
                <?php
                include('bdd.php');
                $select=$bdd->query('SELECT * FROM type_anim');
                while($selectall=$select->fetch()){
                    $codetypeanim=$selectall['CODETYPEANIM'];
                    $nomtypeanim=$selectall['NOMTYPEANIM'];
                    echo "<option value=".$codetypeanim.">".$codetypeanim." ".$nomtypeanim."</option><br>";               
                }

                ?>
            </select>
            <br>
            
            <label>Nom animation</label> : <input type="text" name="nomanim"class="form_field" ><br>
            <label>Date de création de l'animation</label> : <input type="date" name="datecreationanim"><br>
            <label>Date de validité :</label> <input type="date" name="datevaliditeanim" ><br>
            <label>Durée de l'animation </label>: <input type="number" name="dureeanim"class="form_field"><br>
            <label>Limite d'âge</label> : <input type="number" min="8" max="60"name="limiteage" class="form_field"><br>
            <label>Tarif d'animation</label> : <input type="number" min="0" max="600" name="tarifanim"class="form_field">&euro;<br>
            <label>Nombre de places</label> : <input type="number" name="nbreplaceanim" class="form_field"><br>
            <label>Description</label> : <br><textarea name="descriptanim" id="" cols="40" rows="5"></textarea><br>
            <label>Commentaire</label> : <br> <textarea name="commentanim" id="" cols="40" rows="5"></textarea><br>
            <label>Difficulté</label> :  Débutant <input type="radio" name="difficulteanim" value="Débutant"> Intermédiaire <input type="radio" name="difficulteanim" value="Intermédiaire"> Confirmé <input type="radio" name="difficulteanim" value="Confirmé"><br>
            <input type="submit" value="Créer">
          
    </form>
</center>


    

</body>
</html>