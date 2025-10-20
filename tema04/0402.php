<?php     /* Oppgave 0402 */ 
/* 
/*    Programmet mottar postnr fra et HTML-skjema  
/*    Programmet sjekker om postnr er korrekt fylt ut 
*/ 
  $klassekode=$_POST ["svar"]; 
 
  $lovligKlassekode=true; 
 
  if (!$klassekode)  /* klassekode er ikke fylt ut (! foran betyr "ikke"*/ 
    { 
      $lovligKlassekode=false; 
      print("Klassekode er ikke fylt ut <br />"); 
    } 
  else if (strlen($postnr)!=3)  /* klassekode består ikke av 3 tegn  (strlen har med lengden på en tekststreng )*/ 
    { 
      $lovligKlassekode=false; 
      print("Klassekode best&aring;r ikke av 2 bokstaver    og ett tall <br />"); 
    } 
  else 
    { 
      if (is_numeric($lovligKlassekode))  /* is_numeric($variabelnavn) - true hvis variabelen inneholder et tall */ 
        { 
          lovligKlassekode=false; 
          print("Klassekode best&aring;r ikke bare av siffre  <br />"); 
        } 
    } 
 
  if ($lovligKlassekode)  /* klassekode er  korrekt fylt ut */ 
    { 
      print("Klassekode er korrekt fylt ut <br />"); 
    } 
?>          