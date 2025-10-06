<?php    /* Oppgave 3*/
/*
/*    Programmet mottar fra et HTML-skjema et fornavn og et etternavn ved POST-metoden
/*    Programmet skriver ut en "god dag"-melding med personens navn 
*/
  $tall1=$_POST ["tall1"];
  $tall2=$_POST ["tall2"];  

  $summen=$tall1 + $tall2;
  $differansen=$tall1 - $tall2;

    print ("Tall 1 er $tall1 <br />");
    print ("Tall 2 er $tall2 <br />");
    print ("Summen er $summen <br />");
    <br />;
    print ("Differansen er $differansen <br />");
?>