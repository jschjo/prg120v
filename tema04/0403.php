<?php     /* Oppgave 0403 */ 
/* 
/*    Programmet mottar klassekode fra et HTML-skjema  
/*    Programmet sjekker om klassekode er korrekt fylt ut 
*/ 
  $klassekode=$_POST ["svar"]; 
 
  $lovligKlassekode=true; 
 
  if (!$klassekode)  /* klassekode er ikke fylt ut */ 
    { 
      $lovligKlassekode=false; 
      print("Klassekode er ikke fylt ut <br />"); 
    } 
  else if (strlen($klassekode)!=7)  /* klassekode består ikke av 3 tegn */ 
    { 
      $lovligKlassekode=false; 
      print("Klassekode best&aring;r ikke av 7 tegn <br />"); 
    } 
  else  
        { 
      $tegn1=$klassekode[0];   /* første tegn i klassekoden  */ 
      $tegn2=$klassekode[1];   /* andre tegn i klassekoden  */ 
      $tegn2=$klassekode[2];   /* tredje tegn i klassekoden  */ 
      $tegn2=$klassekode[3];   /* fjerde tegn i klassekoden  */ 
      $tegn2=$klassekode[4];   /* femte tegn i klassekoden  */ 
      $tegn2=$klassekode[5];   /* sjette tegn i klassekoden  */ 
      $tegn2=$klassekode[6];   /* syvende tegn i klassekoden  */ 

      if (!ctype_alpha($tegn1))  /* tegn1 er ikke bokstav */  
        { 
          $lovligKlassekode=false; 
          print("F&oslash;rste tegn er ikke en bokstav <br />"); 
        } 
   
      if (!ctype_alpha($tegn2))  /* tegn2 er ikke bokstav */ 
        { 
          $lovligKlassekode=false; 
          print("Andre tegn er ikke en bokstav <br />"); 
        } 

      if (!ctype_alpha($tegn3))  /* tegn3 er ikke bokstav */ 
        { 
          $lovligKlassekode=false; 
          print("Tredje tegn er ikke en bokstav <br />"); 
        } 
  
      if (!ctype_digit($tegn4))  /* tegn4 er ikke et siffer */  
        { 
          $lovligKlassekode=false; 
          print("Fjerde tegn er ikke et siffer  <br />"); 
        } 

      if (!ctype_digit($tegn5))  /* tegn5 er ikke et siffer */  
        { 
          $lovligKlassekode=false; 
          print("Femte tegn er ikke et siffer  <br />"); 
        } 

      if (!ctype_digit($tegn6))  /* tegn6 er ikke et siffer */  
        { 
          $lovligKlassekode=false; 
          print("Sjette tegn er ikke et siffer  <br />"); 
        } 

      if (!ctype_digit($tegn7))  /* tegn7 er ikke et siffer eller en bokstav */  
        { 
          $lovligKlassekode=false; 
          print("Sjette tegn er ikke et siffer eller en bokstav  <br />"); 
        } 
    } 
 
  if ($lovligKlassekode)  /* klassekode er  korrekt fylt ut */ 
    { 
      print("Klassekode er korrekt fylt ut <br />"); 
    } 
?> 