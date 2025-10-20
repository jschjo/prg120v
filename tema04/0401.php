<?php     /* Oppgave 1 */ 
/* 
/*    Programmet mottar postnr fra et HTML-skjema  
/*    Programmet sjekker om postnr er korrekt fylt ut 
*/ 
  $postnr=$_POST ["svar"]; 
 
  $lovligPostnr=true; 
 
  if (!$postnr)  /* postnr er ikke fylt ut (! foran betyr "ikke"*/ 
    { 
      $lovligPostnr=false; 
      print("Postnr er ikke fylt ut <br />"); 
    } 
  else if (strlen($postnr)!=4)  /* postnr består ikke av 4 tegn  (strlen har med lengden på en tekststreng )*/ 
    { 
      $lovligPostnr=false; 
      print("Postnr best&aring;r ikke av 4 tegn <br />"); 
    } 
  else 
    { 
      if (!ctype_digit($postnr))  /* ctype_digit($variabelnavn) tester ut om variabelen kun inneholder siffre */ 
        { 
          $lovligPostnr=false; 
          print("Postnr best&aring;r ikke bare av siffre  <br />"); 
        } 
    } 
 
  if ($lovligPostnr)  /* postnr er  korrekt fylt ut */ 
    { 
      print("Postnr er korrekt fylt ut <br />"); 
    } 
?>  