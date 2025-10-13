<?php     /* Eksempel 1 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3 ?"
/*    Programmet sjekker om svaret er riktig og skriver ut en melding ang. svaret 
*/
  $svar=$_POST ["svar"];
	
  if (!$svar)  
    {
      print("Du har ikke svart &aring; sp&oslash;rsm&aring;let om du er student ");
    }
  else if ($svar == "j" || $svar == "J" ||  $svar == "ja" || $svar == "JA" ||== "Ja")  
    {
      print("Du har svart ja p&aring; sp&oslash;rsm&aring;let om du er student ");
    }   
  else if ($svar == "n" || $svar == "N" ||  $svar == "nei" || $svar == "NEI" ||== "Nei")  
    {
      print("Du har svart nei p&aring; sp&oslash;rsm&aring;let om du er student ");
    }
  else          
    {
      print("Du har ikke svart ja eller nei p&aring; sp&oslash;rsm&aring;let om du er student ");
    }   

?>    