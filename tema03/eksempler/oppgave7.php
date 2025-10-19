<!DOCTYPE html>
<html>
<head>
  <title>Oppgave 7  </title>
</head>
<body>
  <h3>Oppgave 7</h3>
    
<form method="post" action="" id="0307" name="0307">
 Skriv inn fornavn <input type="text" id="fornavn" name="fornavn" required  /> <br />
 Skriv inn etternavn <input type="text" id="etternavn" name="etternavn" required  /> <br />
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
    <input type="reset" value="Nullstill" name="nullstill" id="nullstill" /> <br />
   </form>
</body>
</html>

<?php /* Oppgave 7 */
/*
/* Programmet skriver ut tallene fra 1 til 10 på hver sin linje
*/
  $fornavn=$_POST ["fornavn"];
  $etternavn=$_POST ["etternavn"]; 

    print ("Fornavnet er $fornavn <br />");
    print ("Etternavnet er $etternavn <br />");
?> 