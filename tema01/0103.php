<?php    /* Oppgave 3*/
/*
/*    Programmet mottar fra et HTML-skjema et fornavn og et etternavn ved POST-metoden
/*    Programmet skriver ut en "god dag"-melding med personens navn 
*/
  $tall1=$_POST ["tall1"];
  $tall2=$_POST ["tall2"];  
  $sum=$_POST ["sum"];
  
  print ("Tall 1 er $tall1, tall 2 er $tall2. Summen er $tall1 + $tall2. Differansen er $tall1 - $tall2 <br />"); 
?>