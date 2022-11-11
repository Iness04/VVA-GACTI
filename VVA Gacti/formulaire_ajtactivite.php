<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activités</title>
</head>
<body>
<form action="ajt_activite.php" method="POST">
            <label>Code de l'animation</label> : 
            <select name="codeanim">
            <?php
                include('bdd.php');
                $select=$bdd->query('SELECT CODEANIM FROM animation');
                while($selectall=$select->fetch()){
                    $codeanim=$selectall['CODEANIM'];
                    echo "<option value=".$codeanim.">".$codeanim." </option><br>";               
                }

                ?>
            </select><br>
            <label>Date de l'activité</label> : <input type="date" name="dateactivite"><br>
            <label>Code état de l'activité</label> <select name="codeetat">
            <?php
                
                $select=$bdd->query('SELECT CODEETATACT FROM etat_act');
                while($selectall=$select->fetch()){
                    $codeetat=$selectall['CODEETATACT'];
                    echo "<option value=".$codeetat.">".$codeetat." </option><br>";               
                }
                ?>
                </select><br>
            <label>Heure de rendez-vous de l'activité</label> : <input type="time" name="heurerdvactivite"><br>
            <label>Prix de l'activité </label>: <input type="number" name="prixactivite"><br>
            <label>Heure de début de l'activité</label> : <input type="time" name="heuredebutactivite"><br>
            
            <br>
            <input type="submit" value="Créer">
</form>  
</body>
</html>