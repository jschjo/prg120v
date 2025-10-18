<?php    /* Oppgave 1*/
/*
/*    Programmet mottar fra et HTML-skjema et fornavn og et etternavn ved POST-metoden
/*    Programmet skriver ut en "god dag"-melding med personens navn 
*/
  $tall1=$_POST ["tall1"];
  $tall2=$_POST ["tall2"]; 
  $tall3=$_POST ["tall3"]; 

  $summen=$tall1 * $tall2;  

    print ("Tall 1 er $tall1 <br />");
    print ("Tall 2 er $tall2 <br />");
    print ("<br />");
    print ("Du skrev at summen er $tall3 <br />");


if ($summen == $tall3)    
  {  
    print ("Riktig. $tall1 ganger $tall2 er $summen");  
  }
else {
  print ("Det er feil. $tall1 ganger $tall2 er $summen. Prov gjerne igjen!");
} 
?>  