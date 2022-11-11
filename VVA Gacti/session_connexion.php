<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Animation formumaire pop up connexion -->
    <script src="js/popup_connexion.js"></script>
    <!-- Croix pour quitter le formulaire -->
    <script src="https://kit.fontawesome.com/62fc95fd43.js" crossorigin="anonymous"></script>
    <title>Connexion</title>
</head>
<body>
    
   <?php
   include("bdd.php");
    


    if (isset($_POST['submit'])){

        $req1=$bdd->prepare("SELECT USER,MDP,TYPEPROFIL FROM compte WHERE USER=? AND MDP=?");
        $req1->execute(array(
	        $_POST['pseudo'],
	        $_POST['password'],
        ));

        $count = $req1->rowCount();
		if ($count>0) {	 
            $userinfo=$req1->fetch();
            $_SESSION['pseudo']=$_POST['pseudo'];
            $_SESSION['typeprofil']=$userinfo['TYPEPROFIL'];
            header("Location:index.php");
            
        }
        else{
            $error= '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="position:fixed; z-index:3;margin-left:78%;min-width:150px;">
            Pseudo et/ou mot de passe incorrect.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            
        }
    }
   
   ?>
  
         <?php 
            if(isset($error)){    
            echo $error;
            }
          ?>
<form action=" " method="POST" id="popup">
        <br>	

            <i class="fa-solid fa-xmark" id="close" onclick="closePopUp()" style="color:black;"></i>
            <h1>Se connecter</h1><br>
           
            
            <div class="form-floating mb-3 input-form">
                <input type="pseudo" class="form-control" id="floatingInput" placeholder="Pseudo" name="pseudo" required>
                <label for="floatingInput">Pseudo</label>
              </div>
              <div class="form-floating input-form">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Mot de passe" name="password" required>
                <label for="floatingPassword">Mot de passe</label>
              </div>
              
            <div align="center">
            <button type="submit" name="submit" id="danger" class="btn btn-primary m-1">Se connecter</button>
            </div>
    
   
    </form>
</body>
</html>