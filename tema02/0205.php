    <?php     /* Eksempel 1 */
    /*
    /*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3 ?"
    /*    Programmet sjekker om svaret er riktig og skriver ut en melding ang. svaret 
    */
      $tall1=$_POST ["tall1"];
      $tall2=$_POST ["tall2"];
      $tall3=$_POST ["tall3"];


      $1=$tall1 + $tall2;   //addisjon
      $2=$tall1 - $tall2;   //subtraksjon
      $3=$tall1 * $tall;   //multiplikasjon
      $4=$tall1 / $tall2;   //divisjon

      
      if ($tall3 > 4)   
        {
          print ("Det er ikke angitt en gyldig regneoperasjon");
        }
      else if ($tall3 == 1)  
        { 
          print $1 ("Regneoperasjonen er Addisjon");
        }   
      else if ($tall3 == 2)   
        {
          print $2 ("Regneoperasjonen er Substraksjon");
        }
      else if ($tall3 == 3)  
        {
          print $3 ("Regneoperasjonen er Multiplikasjon");
        }   
      else if ($tall3 == 4)           
        {
          print $4 ("Regneoperasjonen er Divisjon");
        }  
          else  
        {   
          print("Begge sp&oslash;rsm&aring;lene har ikke gyldige svar");
        }
        
      ?>  