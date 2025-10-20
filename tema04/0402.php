<?php /* Oppgave 6 */
/*
/* Programmet mottar fra et HTML-skjema et tall (positivt heltall)
/* Programmet skriver ut tallene fra 1 til det angitte tallet
*/
$postnr=$_POST ["svar"];


  $postnr=$_POST ["svar"];
	
   if (empty($_POST["name"])) { 
   }{
      print("Du har ikke fylt ut postnr");
    }
  else if ($svar == "j")  
    {
      print("Postnr består ikke av 4 tegn    ");
    }
  else if ($svar == "n") 
    {
      print("Minst ett av tegnene er ikke et siffer     ");
    }
  else  
    {
      print("postnr er korrekt fyllt ut");
    }

?>      