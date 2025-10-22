<?php  /* registrer-klasse */ 
/* 
/*    Programmet lager et html-skjema for å registrere en klasse 
/*    Programmet registrerer data i databasen (klassekode og klassenavn)
*/ 
     
?>  
 
<h3>Registrer klasse </h3> 
 
<form method="post" action="" id="registrerEmneSkjema" name="registrerEmneSkjema"> 
  Klassekode <input type="text" id="klassekode" name="klassekode" required /> <br/> 
  Klassenavn <input type="text" id="klassenavn" name="klassenavn" required /> <br/> 
  Studiumkode <select name="studiumkode" id="studiumkode"> 
     <?php print("<option value=''>velg klasse </option>"); 
     include("dynamiske-funksjoner.php"); listeboksKlassekode(); ?>  
    </select>  <br/> 
  <input type="submit" value="Registrer klasse" id="registrerKlasseKnapp" name="registrerKlasseKnapp" />  
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br /> 
</form> 
 
<?php  
  if (isset($_POST ["registrerKlasseKnapp"])) 
    { 
      $klassekode=$_POST ["klassekode"]; 
      $klassenavn=$_POST ["klassenavn"]; 
      $studiumkode=$_POST ["studiumkode"];   
 
      if (!$klassekode || !$klassenavn || !$studiumkode) 
        { 
          print ("Alle felt m&aring; fylles ut"); 
        } 
      else 
        { 
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */ 
 
          $sqlSetning="SELECT * FROM emne WHERE klassekode='$klassekode';"; 
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
          $antallRader=mysqli_num_rows($sqlResultat);  
 
          if ($antallRader!=0)  /* faget er registrert fra før */ 
            { 
              print ("Klassen er registrert fra f&oslashr"); 
            } 
          else 
            { 
              $sqlSetning="INSERT INTO klasse (klassekode,klassenavn,studiumkode) 
VALUES('$emnekode','$emnenavn','$studiumkode');"; 
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen"); 
              print ("F&oslash;lgende emne er n&aring; registrert: $klassekode $klassnavn $studiumkode");  
            } 
        } 
    } 
?> 
