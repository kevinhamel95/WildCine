<html>
<head>
	<META HTTP-EQUIV="Content-Style-Type" CONTENT="text/css">
	<link rel="stylesheet" href="ChartreGraphique.css" media="screen" type="text/css" charset=UTF-8 />
	<title> WildCiné </title>
</head>
<?php
include 'conect.php';
 header('Content-type: text/html; charset=UTF-8');
 ?>
 
 <div id="menu">
 <ul>
 <li><a href="ListeFilm.php">Liste des Film</a></li>
 <li><a href="#">Item 2</a></li>
 <li><a href="#">Item plus long</a></li>
  <img src="WildCine.png" align=right>
 </div>
 
 <div id ="contenu">
 <center>
 <br><h1>Bienvenue sur le site de WildCiné.</h1><br>
 <h3>voici une liste de 5 film au hasard :</h3> <br><br>
 <?php
 $sql="select `NomFilm` from film order by rand() limit 0,5";
  $requete = mysqli_query($db,$sql);
  while ($row = mysqli_fetch_array($requete))
  {
    echo $row[0].'<br><br>'; 
  }
 ?>
 </div>