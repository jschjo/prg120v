<?php /* slett-student */
/*
/* Programmet lager et skjema for å kunne slette en student
/* Programmet sletter info om studenten
*/
?>
<script src="tema05-06/funksjoner.js"> </script>
<h3>Slett student</h3>
<form method="post" action="" id="slettStudentSkjema" name="slettStudentSkjema" onSubmit="return
bekreft(tema05-06/funksjoner.js)">
Student
<select name="brukernavn" id="brukernavn">
<?php print("<option value=''>velg student </option>");
include("dynamiske-funksjoner.php"); listeboksBrukernavn(); ?>
</select> <br/>
<input type="submit" value="Slett student" name="slettBrukerKnapp" id="slettBrukerKnapp" />
</form>
<?php
if (isset($_POST ["slettBrukerKnapp"]))
{
include("db-tilkobling.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
$brukernavn=$_POST ["brukernavn"];
if (!$brukernavn)
{
print ("Det er ikke valgt noen student");
}
else
{
include("db-tilkobling.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
$sqlSetning="DELETE FROM student WHERE brukernavn='$brukernavn';";
mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
/* SQL-setning sendt til database-serveren */
print ("F&oslash;lgende student er n&aring; slettet: $brukernavn <br />");
}
}
?>