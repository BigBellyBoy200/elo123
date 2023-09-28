<?php
$myFile = fopen("newfile.txt","w")  
            or die("unable to open file");
$tekst = "John Juz tu nie mieszkam";
fwrite( $myFile, $tekst ),
fclose( $myFile);
?>
   
