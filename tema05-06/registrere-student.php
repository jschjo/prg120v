<?php  /* registrer-student */ 
/* 
/*    Programmet lager et html-skjema for å registrere en student  
/*    Programmet registrerer data (brukernavn, fornavn og etternavn) i databasen 
*/ 
?>  
 
<h3>Registrer student </h3> 
 
<form method="post" action="" id="registrerStudentSkjema" name="registrerStudentSkjema"> 
  Brukernavn <input type="text" id="brukernavn" name="brukernavn" required /> <br/> 
  Fornavn <input type="text" id="fornavn" name="fornavn" required /> <br/> 
  Etternavn <input type="text" id="etternavn" name="etternavn" required /> <br/> 
  Studiumkode <select name="studiumkode" id="studiumkode"> 
  <input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp" />  
  <input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br /> 
</form> 
 
<?php  
  if (isset($_POST ["registrerStudentKnapp"]))  
    { 
      $studentkode=$_POST ["studentkode"]; 
      $studentnavn=$_POST ["studentnavn"]; 
      $studiumkode=$_POST ["studiumkode"];   
 
      if (!$studentkode || !$studentnavn || !$studiumkode)
        { 
          print ("Alle felt m&aring; fylles ut");  
        } 
      else 
        { 
          include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */ 
 
          $sqlSetning="SELECT * FROM student WHERE studentkode='$studentkode';"; 
          $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); 
          $antallRader=mysqli_num_rows($sqlResultat);  
 
          if ($antallRader!=0)  /* studenten er registrert fra før */ 
            { 
              print ("Studenten er registrert fra f&oslashr"); 
            } 
          else 
            { 
              $sqlSetning="INSERT INTO student (studentkode,studentnavn) 
VALUES('$studentkode','$studentnavn');"; 
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen"); 
                /* SQL-setning sendt til database-serveren */ 
 
              print ("F&oslash;lgende student er n&aring; registrert: $studentkode $studentnavn $studiumkode"); 
            } 
        } 
    } 
