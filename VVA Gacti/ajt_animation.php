<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout animation</title>
</head>
<body>
    
<?php
include('bdd.php');
$a=$_POST['codeanim'];
$b=$_POST['codetypeanim'];
$c=$_POST['nomanim'];
$d=$_POST['datecreationanim'];
$e=$_POST['datevaliditeanim'];
$f=$_POST['dureeanim'];
$g=$_POST['limiteage'];
$h=$_POST['tarifanim'];
$i=$_POST['nbreplaceanim'];
$j=$_POST['descriptanim'];
$k=$_POST['commentanim'];
$l=$_POST['difficulteanim'];


if($bdd){
$req = $bdd->prepare("INSERT INTO animation VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");

$req->execute(array($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l));

echo "L'animation a bien été créée !";
}
else{
    echo 'Erreur';
}


?>
</body>
</html>