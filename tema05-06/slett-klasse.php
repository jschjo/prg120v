<?php /* slett-klasse */
/*
/* Programmet lager et skjema for å kunne slette en klasse
/* Programmet sletter det valgte emnet
*/
?>
<script src="funksjoner.js"> </script>
<h3>Slett klasse</h3>
<form method="post" action="" id="slettKlasseSkjema" name="slettKlasseSkjema" onSubmit="return
bekreft(funksjoner.js)">
Klasse 
<select name="klassekode" id="klassekode">
<?php print("<option value=''>velg klasse </option>");
include("dynamiske-funksjoner.php"); listeboksKlassekode(); ?>
</select> <br/>
<input type="submit" value="Slett klasse" name="slettKlasseKnapp" id="slettKlasseKnapp" />
</form>
<?php
if (isset($_POST ["slettKlasseKnapp"]))
{
include("db-tilkobling.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
$klassekode=$_POST ["klassekode"];
if (!$klassekode)
{
print ("Det er ikke valgt noen klasse");
}
else
{
include("db-tilkobling.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
$sqlSetning="DELETE FROM klasse WHERE klassekode='$klassekode';";
mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
/* SQL-setning sendt til database-serveren */
print ("F&oslash;lgende klasse er n&aring; slettet: $klassekode <br />");
}
}
?>