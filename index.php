<?php include("config.ini")?>

<?php $text =$_REQUEST["Adjektive"]." ".$_REQUEST["Farben"]." ".$_REQUEST["Tiere"]."\n";
    file_put_contents($filename, $text, FILE_APPEND)
    ?>

<?php include('nav.inc'); ?>

<?php
    if(empty($_GET['nachname']))
    { die("Kein Nachname übermittelt");}
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Say YES!</title>
    </head>
    
    <body>
        
    
            <?php echo $_GET['Anrede']; ?>
            <?php echo $_GET['name']; ?>
            <br>
            
           
            <h1>I Say YES! to...</h1>
            <br>
            <?php $myText = file($filename, FILE_IGNORE_NEW_LINES);       
            foreach ($myText as $value) 
            { echo "<p>" . $value . "</p>";} 
            ?>
        
    
  
    
    </body>

</html>