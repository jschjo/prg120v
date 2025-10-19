<!DOCTYPE html>
<html>
<head>
  <title>Oppgave 7  </title>
</head>
<body>
  <h3>Oppgave 7</h3>
    
<form method="post" action="" id="0307" name="0307">
 Skriv inn fornavn <input type="text" id="navn" name="navn" required  /> <br />
 Skriv inn etternavn <input type="text" id="navn" name="navn" required  /> <br />
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
    <input type="reset" value="Nullstill" name="nullstill" id="nullstill" /> <br />
   </form>
</body>
</html>

<?php /* Oppgave 7 */
/*
/* Programmet mottar et navn fra et HTML-skjema
/* Programmet skriver ut fornavn og etternavn hver for seg
*/
$navn=$_POST["navn"];
$oppdeltNavn=explode(" ",$navn);
$fornavn=$oppdeltNavn[0];
$etternavn=$oppdeltNavn[1];

print("Fornavnet er $fornavn <br/>");
print("Etternavnet er $etternavn <br/>"); /* fornavn og etternavn skrevet ut hver for seg */
?>

