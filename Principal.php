<html>
<head>
	<META HTTP-EQUIV="Content-Style-Type" CONTENT="text/css">
	<link rel="stylesheet" href="Style.css" media="screen" type="text/css" charset=UTF-8 />
</head>
<?php
include 'conect.php';
 header('Content-type: text/html; charset=UTF-8');
 ?>
 
 <div id="menu">
 
 <a href="ListeFilm.php">Liste des Film</a><br>
 
 </div>
 
 <div id ="contenu">
 <center>
 <?php
 $sql="select `NomFilm` from film order by rand() limit 0,5";
  $requete = mysqli_query($db,$sql);
  while ($row = mysqli_fetch_array($requete))
  {
    echo $row[0].'<br><br>'; 
  }
 ?>
 </div>