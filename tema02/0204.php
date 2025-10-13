<?php     /* Eksempel 1 */
/*
/*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3 ?"
/*    Programmet sjekker om svaret er riktig og skriver ut en melding ang. svaret 
*/
  $svar=$_POST ["svar"];
  $svar2=$_POST ["svar"];
	
  if (!$svar && !$svar2)  
    {
      print("Du har ikke svart &aring; sp&oslash;rsm&aring;lene om du er gift og har barn ");
    }
  else if ($svar == "j" && $svar2 == "j")  
    {
      print(" Du er gift og har barn");
    }   
  else if ($svar == "j" && $svar2 == "n")  
    {
      print("Du er gift og har ikke barn");
    }
  else if ($svar == "n" && $svar2 == "j")  
    {
      print("Du er ikke gift og har barn");
    }
  else if ($svar == "n" && $svar2 == "n")           
    {
      print("Du er ikke gift og har ikke barn");
    }  
     
  ?>        

  /*if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}*/

/*Du er gift og har barn 
• Du er gift og har ikke barn 
• Du er ikke gift og har barn 
• Du er ikke gift og har ikke barn */