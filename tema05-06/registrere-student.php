<?php  /* registrer-student */ 
/* 
/*    Programmet lager et html-skjema for å registrere en student 
/*    Programmet registrerer data i databasen (brukernavn, fornavn, etternavn og klassekode)
*/ 
     
?>  
 
<h3>Registrer student </h3> 
 
<form method="post" action="" id="registrerStudentSkjema" name="registrerStudentSkjema"> 
    Brukernavn <input type="text" id="brukernavn" name="brukernavn" required /> <br/> 
    Fornavn <input type="text" id="fornavn" name="fornavn" required /> <br/>        
    Etternavn <input type="text" id="etternavn" name="etternavn" required /> <br/>     
    Klassekode <select name="klassekode" id="klassekode"> 
     <?php print("<option value=''>velg studium </option>"); 
     include("dynamiske-funksjoner.php"); listeboksStudentkode(); ?>  
    </select>  <br/> 
  <input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp" />  
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
 
          $sqlSetning="SELECT * FROM student WHERE brukernavn='$brukernavn';"; 
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
          $antallRader=mysqli_num_rows($sqlResultat);  
 
          if ($antallRader!=0)  /* faget er registrert fra før */ 
            { 
              print ("Studenten er registrert fra f&oslashr"); 
            } 
          else 
            { 
              $sqlSetning="INSERT INTO student (brukernavn,fornavn,etternavn,klassekode) 
VALUES('$brukernavn','$fornavn','$etternavn','$klassekode');"; 
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen"); 
              print ("F&oslash;lgende student er n&aring; registrert: $brukernavn $fornavn $etternavn $klassekode");  
            } 
        } 
    } 
?> 
