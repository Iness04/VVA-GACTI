<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout activité</title>
</head>
<body>
<?php
include('bdd.php');
$codeanim=$_POST['codeanim'];
$dateactivite=$_POST['dateactivite'];
$code=$_POST['codeetat'];
$heurerdv=$_POST['heurerdvactivite'];
$prix=$_POST['prixactivite'];
$heuredebut=$_POST['heuredebutactivite'];




if($bdd){
$req = $bdd->prepare("INSERT INTO activite(CODEANIM,DATEACT,CODEETATACT,HRRDVACT,PRIXACT,HRDEBUTACT) VALUES(?,?,?,?,?,?)");

$req->execute(array($codeanim,$dateactivite,$code,$heurerdv,$prix,$heuredebut));

echo "L'activité a bien été créée !";
}
else{
    echo 'Erreur';
}


?>  
</body>
</html>