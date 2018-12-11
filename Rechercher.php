<?php
include 'conect.php';
 header('Content-type: text/html; charset=UTF-8');
 $recherche=$_POST['recherche'];
 ?>
<html>
<head>
	<title>resultat de <?php echo $recherche ?></title>
	<META HTTP-EQUIV="Content-Style-Type" CONTENT="text/css">
	<link rel="stylesheet" href="ChartreGraphique.css" media="screen" type="text/css" charset=UTF-8 />
</head>
 <div id="menu">
 <ul>
 <li><a href="AjoutFilm.php">Ajouter un film</a></li>
 <li><a href="#">Rechercher</a>
  <ul>
     <li><a href="RechercheGenre.php">par Genre</a></li>
      <li><a href="RechercheLangueVO.php">par Langue VO</a></li>
      <li><a href="RecherchePaysProd.php">par Pays Production</a></li>
    </ul>
 <li><a href="ListeFilm.php">Liste des Film</a></li>
 </ul>
 <a href="Principal.php"><img src="WildCine.png" align=right></a><br>
 
 </div>
 
 <div id ="contenu">
 <table>
<caption><h4>Resultat de la recherche : <?php echo $recherche?></h4></caption>
 <br><br>
            <thead>
            <tr class="titre_horizon_classique">
                <th colspan="6"><h3>Films</h3></th>
            </tr>
            <tr class="titre_horizon_classique">
                <th>Nom film</th>
                <th>Synopsis</th>
                <th>Année de sortie en salle</th>
                <th>Genre</th>
                <th>Pays de Production</th>
				<th>Langue en version originale</th>
            </tr>
            </thead>
<tbody>
<?php
$recherche .= "%";
$sql="select `CodeFilm`,`NomFilm`,`Synopsis`,`AnneeSortie`,`NomGenre`,`NomLangueVO`, `NomPaysProd` from film, genre, languevo, paysprod where film.CodeGenre = genre.CodeGenre and film.CodePaysProd = paysprod.CodePaysProd and film.CodeLangueVO = languevo.CodeLangueVO and NomFilm like '$recherche'"; // requete avec like qui permet de rechercher sur la base tout les nom de film qui commanceron par la recherche taper daas la barre
$requete = mysqli_query($db,$sql);
while($donnees = mysqli_fetch_array($requete)) 
{
?>
<tr>
<td><?php echo $donnees['NomFilm'] ?></td>
<td><?php echo $donnees['Synopsis']?></td>
<td><center><?php echo $donnees['AnneeSortie']?></center></td>
<td><?php echo $donnees['NomGenre']?></td>
<td><center><?php echo $donnees['NomPaysProd']?></center></td>
<td><center><?php echo $donnees['NomLangueVO']?></center></td>
<?php
}
?>
 
</tbody></table>
</div>