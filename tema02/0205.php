    <?php     /* Eksempel 1 */
    /*
    /*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3 ?"
    /*    Programmet sjekker om svaret er riktig og skriver ut en melding ang. svaret 
    */
      $tall1=$_POST ["tall1"];
      $tall2=$_POST ["tall2"];
      $tall3=$_POST ["tall3"];


      if ($tall3 > 4)   
        {
          print("Det er ikke angitt en gyldig regneoperasjon");
        }
      else if ($tall3 == 1)  
        {
          print ("Tall 1 er $tall1 <br/>");
          print ("Tall 1 er $tall2 <br/>");
          print ("Regneoperasjonen er Addisjon <br/>");
          print ("Resultatet av regneoperasjonen er $tall1*$tall2 <br/>");
        }
      else if ($tall3 == 2)   
        {
          print("Regneoperasjonen er Substraksjon");
        }
      else if ($tall3 == 3)  
        {
          print("Regneoperasjonen er Multiplikasjon");
        }   
      else if ($tall3 == 4) 
        {
          print("Regneoperasjonen er Divisjon");
        }  
          else  
        {   
          print("Begge sp&oslash;rsm&aring;lene har ikke gyldige svar");
        }
        
      ?>  