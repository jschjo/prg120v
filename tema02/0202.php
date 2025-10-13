<?php     /* Eksempel 1 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3 ?"
/*    Programmet sjekker om svaret er riktig og skriver ut en melding ang. svaret 
*/
  $svar=$_POST ["svar"];
	
  if (!$svar)  
    {
      print("Du har ikke svart p&aring; sp&oslash;rsm&aring;let om du er student ");
    }
  else if ($svar == "j")  
    {
      print("Du har svart j p&aring; sp&oslash;rsm&aring;let om du er student ");
    }
  else if ($svar == "n") 
    {
      print("Du har svart n p&aring; sp&oslash;rsm&aring;let om du er student ");
    }
  else  
    {
      print("Du har ikke svart j eller n p&aring; sp&oslash;rsm&aring;let om du er student ");
    }

?>         