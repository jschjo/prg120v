    <?php     /* Eksempel 1 */
    /*
    /*    Programmet mottar fra et HTML-skjema et svar på spørsmålet "Hva er 3 ganger 3 ?"
    /*    Programmet sjekker om svaret er riktig og skriver ut en melding ang. svaret 
    */
      $tall1=$_POST ["tall1"];
      $tall2=$_POST ["tall2"];
      $tall3=$_POST ["tall3"];

      print ("Tall 1 er $tall1 <br/>");
      print ("Tall 2 er $tall2 <br/>");
      print ("Tall 3 er $tall3 <br/> <br/>");

      if (!$tall1 || !$tall2 || !$tall3)
        {
          print("Det er ikke angitt en gyldig regneoperasjon");
        }
      else if ($tall1 < $tall2)   
        {  
          print ("Tall 1 er mindre enn Tall 2 <br/>");
        }                       
      else if ($tall1 == $tall2)   
        {
          print ("Tall 1 er lik Tall 2 <br/>");
        }
      else if ($tall1 > $tall2)  
        {
          print ("Tall 1 er st&oslash;rre enn Tall 2<br/>");
        }
              else if ($tall1 < $tall3)   
        {   

          print ("Tall 1 er mindre enn Tall 3 <br/>");
        }                       
      else if ($tall1 == $tall3)   
        {
        
          print ("Tall 1 er lik Tall 3 <br/>");
        }
      else if ($tall1 > $tall3)  
        {
          print ("Tall 1 er st&oslash;rre enn Tall 3<br/>");
        } 
        else if ($tall2 < $tall3)   
        {   

           print ("Tall 2 er mindre enn Tall 3 <br/>");
        }                       
      else if ($tall2 == $tall3)   
        {
        
          print ("Tall 2 er lik Tall 3 <br/>");
        }
      else if ($tall2 > $tall3)  
        {

          print ("Tall 2 er st&oslash;rre enn Tall 3<br/>");
        }

      ?>  