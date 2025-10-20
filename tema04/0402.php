<?php /* Oppgave 6 */
/*
/* Programmet mottar fra et HTML-skjema et tall (positivt heltall)
/* Programmet skriver ut tallene fra 1 til det angitte tallet
*/
$postnr=$_POST ["svar"];

$tallArray=array($postnr);    /* postnr lagt inn i et array */  
for ($tall=0;$tall<=4;$tall++) 
{ 
print("$tallArray[$tall] ");    /* postn tallene skrevet ut  */ 
} 
print("<br/>"); 
for ($tall=4;$tall>=0;$tall--) 
{ 
print("$tallArray[$tall] ");    /* de 5 tallene skrevet ut i motsatt rekkefølge */ 
} 
?> 
