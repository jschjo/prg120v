<!DOCTYPE html>
<html>
<head>
  <title>Oppgave 6  </title>
</head>
<body>
  <h3>Oppgave 6</h3>
    
  <form method="post" action="" id="0306" name="0306">
    Skriv inn et postivt heltall <input type="text" id="svar" name="svar" required  /> <br />
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
    <input type="reset" value="Nullstill" name="nullstill" id="nullstill" /> <br />
  </form>
</body>
</html>


<?php /* Oppgave 6 */
/*
/* Programmet mottar fra et HTML-skjema et tall (positivt heltall)
/* Programmet skriver ut tallene fra 1 til det angitte tallet
*/
$svar=$_POST ["svar"];

if ($svar <= 0) /* angitt tall er ikke et positivt heltall */
{
print("Tallet $svar er ikke et positivt heltall <br/>");
}
else
{
for ($tall=1;$tall<=$svar;$tall++) /* repetisjon fra 1 til det angitte tallet */
{
print("$tall <br/>");
}

?>


