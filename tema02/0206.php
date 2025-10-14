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
          print ("$tall1 er mindre enn $tall2 <br/>");
        }
      else if ($tall1 == $tall2)   
        {
        
          print ("Tall 1 er $tall1 <br/>"); 
          print ("Tall 1 er $tall2 <br/>");
          print ("$tall1 er lik $tall2 <br/>");
        }
      else if ($tall1 > $tall2)  
        {

          print ("Tall 1 er $tall1 <br/>"); 
          print ("Tall 1 er $tall2 <br/>");
          print ("$tall1 er st&oslash;rre enn $tall2 <br/>");
        }
          else  
        {   
          print("Begge sp&oslash;rsm&aring;lene har ikke gyldige svar");
        }
        
      ?>  