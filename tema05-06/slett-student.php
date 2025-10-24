<?php /* slett-student */
/*
/* Programmet lager et skjema for å kunne slette en student
/* Programmet sletter info om studenten
*/
?>
<script src="funksjoner.js"> </script>
<h3>Slett student</h3>
<form method="post" action="" id="slettStudentSkjema" name="slettStudentSkjema" onSubmit="return
bekreft()">
Brukernavn <select name="student" id="brukernavn">
<?php print("<option value=''>velg brukernavn </option>");
include("dynamiske-funksjoner.php"); listeboksBrukernavn(); ?>
</select> <br/>
<input type="submit" value="Slett student" name="slettBrukerKnapp" id="slettBrukerKnapp" />
</form>
<?php
if (isset($_POST ["slettBrukerKnapp"]))
{
include("db-tilkobling.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
$emnekode=$_POST ["brukernavn"];
if (!$brukernavn)
{
print ("Det er ikke valgt noen student");
}
else
{
include("db-tilkobling.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
$sqlSetning="DELETE FROM brukernavn WHERE brukernavn='$brukernavn';";
mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
/* SQL-setning sendt til database-serveren */
print ("F&oslash;lgende emne er n&aring; slettet: $brukernavn <br />");
}
}
?>