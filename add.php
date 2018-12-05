<!DOCTYPE html>
<html>
    <head> 
    </head>
    
    <body>
        <?php include('nav.inc'); ?>
        
        
        
        <form action="index.php" method="get">
                
                Begrüßung:<br> 
                <select name="Anrede" size="1">
                <option>Guten Morgen</option>
                <option>Mahlzeit</option>
                <option>Guten Abend</option>
                <option>Gute Nacht</option> <br>
                </select>
                <br>
                Name:<br> 
                <input type="text" name="name">
                <br>
                Nachname: <br> 
                <input type="text" name="nachname">     <br>
                <h1>I Say YES! to... </h1>
        
                <select name="Adjektive" size="1">
                <option>Kleine</option>
                <option>Große</option>
                <option>Dicke</option>
                <option>Dünne</option>
                
                </select>
                <select name="Farben" size="1">
                <option>Rote</option>
                <option>Blaue</option>
                <option>Gelbe</option>
                <option>Grüne</option>
                </select>
                <select name="Tiere" size="1">
                <option>Giraffen</option>
                <option>Zebras</option>
                <option>Hunde</option>
                <option>Katzen</option>
                
                </select>
                <br>
            <input type="submit" value="Los geht´s!">
        </form>
    </body>
</html>