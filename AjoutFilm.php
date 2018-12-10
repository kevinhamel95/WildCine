<html>
<head>
	<title>Ajouter un film à WildCine</title>
	<META HTTP-EQUIV="Content-Style-Type" CONTENT="text/css">
	<link rel="stylesheet" href="ChartreGraphique.css" media="screen" type="text/css" charset=UTF-8 />
</head>
<?php
include 'conect.php';
 header('Content-type: text/html; charset=UTF-8');
 ?>
 
 <div id="menu">
 <ul>
 <li><a href="ListeFilm.php">Liste des Film</a></li>
 <li><a href="">Rechercher</a>
  <ul>
	  <li><a href="RechercheGenre.php">par Genre</a></li>
      <li><a href="RechercheLangueVO.php">par Langue VO</a></li>
      <li><a href="RecherchePaysProd.php">par Pays Production</a></li>
    </ul></ul>
 <a href="Principal.php"><img src="WildCine.png" align=right></a><br>
 
 </div>
 
 <div id ="contenu">

 <form action="AjouterFilm.php" method="POST">
                <h1>Ajouter un Film</h1>
                
                <label><b>Nom</b></label><br>
                <input type="text" placeholder="Nom" name="nom" required><br><br>

                <label><b>Synopsis</b></label><br>
                <TEXTAREA type="text" placeholder="Synopsis" name="Synopsis"required></TEXTAREA><br><br>
				
				<label><b>Année de Sortie</b></label><br>
                <input type="number" placeholder="1900" name="AnnéeSortie" min="1895" required><br><br>

</select><br><br>
	<label for="Genre">Genre</label><br />
    <select name="Genre" id="genre">
 
<?php
 
$sql2= mysqli_query($db,"SELECT * FROM `genre`");

while($donnees2=mysqli_fetch_assoc($sql2))
{
?>
           <option value="<?php echo $donnees2['CodeGenre']; ?>"> <?php echo $donnees2['NomGenre']; ?></option>
<?php
}
 
?>
</select><br><br>
	<label for="LangueVO">Langue VO</label><br />
    <select name="LangueVO" id="LangueVO">
 
<?php
 
$sql3= mysqli_query($db,"SELECT * FROM `languevo`");

while($donnees2=mysqli_fetch_assoc($sql3))
{
?>
           <option value="<?php echo $donnees2['CodeLangueVO']; ?>"> <?php echo $donnees2['NomLangueVO']; ?></option>
<?php
}
 
?>
</select><br><br>
	<label for="PaysProd">Pays Production</label><br />
    <select name="PaysProd" id="PaysProd">
 
<?php
 
$sql2= mysqli_query($db,"SELECT * FROM `paysprod`");

while($donnees2=mysqli_fetch_assoc($sql2))
{
?>
           <option value="<?php echo $donnees2['CodePaysProd']; ?>"> <?php echo $donnees2['NomPaysProd']; ?></option>
<?php
}
 
?>
				