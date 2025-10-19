<!DOCTYPE html>
<html>
<head>
  <title>Oppgave 6  </title>
</head>
<body>
  <h3>Eksempel 1</h3>
    
  <form method="post" action="" id="0306" name="0306">
    Skriv inn et heltall under 10 <input type="text" id="svar" name="svar" required  /> <br />
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
    <input type="reset" value="Nullstill" name="nullstill" id="nullstill" /> <br />
  </form>
</body>
</html>

<?php /* Oppgave 1 */
/*
/* Programmet skriver ut tallene fra 1 til 10 på hver sin linje
*/
if (isset($_POST ["fortsett"])) {
for ($tall=1;$tall<=10;$tall++) /* repetisjon fra 1 til 10 */
{
print("$tall <br/>"); /* tallet skrevet ut */
}
}
?>  