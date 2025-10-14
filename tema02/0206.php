    <?php     /* Eksempel 1 */
    /*
    /*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3 ?"
    /*    Programmet sjekker om svaret er riktig og skriver ut en melding ang. svaret 
    */
      $tall1=$_POST ["tall1"];
      $tall2=$_POST ["tall2"];


      if (!$tall1 || !$tall2)
        {
          print("Det er ikke angitt en gyldig regneoperasjon");
        }
      else if ($tall1 < $tall2)   
        {

          print ("Tall 1 er $tall1 <br/>"); 
          print ("Tall 1 er $tall2 <br/>");
          print ("$tall er mindre enn $tall2 <br/>");
        }
      else if ($tall1 == $tall2)   
        {
        
          print ("Tall 1 er $tall1 <br/>"); 
          print ("Tall 1 er $tall2 <br/>");
          print ("$tall er lik   enn $tall2 <br/>");
        }
      else if ($tall3 > 3)  
        {
         $resultat=$tall1 * $tall2;

          print ("Tall 1 er $tall1 <br/>"); 
          print ("Tall 1 er $tall2 <br/>");
          print ("$tall er større enn $tall2 <br/>");
        }   
      else if ($tall3 == 4) 
        {
    
        }
          else  
        {   
          print("Begge sp&oslash;rsm&aring;lene har ikke gyldige svar");
        }
        
      ?>  