<!DOCTYPE html>
<html>
<head>
  <title>Oppgave 6  </title>
</head>
<body>
  <h3>Oppgave 6</h3>
    
  <form method="post" action="" id="0306" name="0306">
    Skriv inn et postivt heltall <input type="text" id="svar" name="svar" required  /> <br />
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
    <input type="reset" value="Nullstill" name="nullstill" id="nullstill" /> <br />
  </form>
</body>
</html>


$tall1=$_POST ["tall1"];
  $tall2=$_POST ["tall2"]; 
  $tall3=$_POST ["tall3"]; 

  $summen=$tall1 * $tall2;  

    print ("Tall 1 er $tall1 <br />");
    print ("Tall 2 er $tall2 <br />");
    print ("<br />");
    print ("Du skrev at summen er $tall3 <br />");


if ($summen == $tall3)    
  {  
    print ("Riktig. $tall1 ganger $tall2 er $summen");  
  }
else {
  print ("Det er feil. $tall1 ganger $tall2 er $summen. Prov gjerne igjen!");
} 
?>  