<?php     /* Eksempel 1 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3 ?"
/*    Programmet sjekker om svaret er riktig og skriver ut en melding ang. svaret 
*/
  $gift=$_POST ["gift"];
  $barn=$_POST ["barn"];
	
  if (!$gift || !$barn)  
    {
      print("Du har ikke svart p&aring; begge sp&oslash;rsm&aring;lene om du er gift og har barn ");
    }
  else if ($gift == "j" && $barn == "j")  
    {
      print(" Du er gift og har barn");
    }   
  else if ($gift == "j" && $barn == "n")  
    {
      print("Du er gift og har ikke barn");
    }
  else if ($gift == "n" && $barn == "j")  
    {
      print("Du er ikke gift og har barn");
    }   
  else if ($gift == "n" && $barn == "n")           
    {
      print("Du er ikke gift og har ikke barn");
    }  
      else  
    {   
      print("Begge sp&oslash;rsm&aring;lene har ikke gyldige svar");
    }
     
  ?>  