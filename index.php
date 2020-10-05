<?php session_start()  ?>
<!DOCTYPE html>
<html>
<head>
	<title>connected</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <?php 
    if (isset($_SESSION['id'])) {
    
      echo "<center><h1>Bonjour ".htmlspecialchars($_SESSION['pseudo'])."</h1></center>";
    }else{
		header("Location: connexion.php");
    }
    ?>

<form id="form" action="" method="post">


		<div class="comment-form">
  				<center>          <div class="group">
    				<label for="textcomment" class="textcomment">Zone de commentaire</label><br>
    				<textarea name="textcomment" id="" cols="80" rows="10"></textarea>
            	</div>
              <div class="group">
  					  <input name="connexion" type="submit" class="col-4 btn btn-primary" value="Envoyer">
  				</div>
          </center>
             
     </div>
     <?php
        if(isset($_POST['connexion'])){
    
        echo "<h3><strong>".$_SESSION['pseudo']."</strong>:".$_POST["textcomment"]."</h3>";     
        }
     ?>

</body>
</html>