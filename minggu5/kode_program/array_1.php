<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
        $ListDosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
        for($i = 0; $i < count($ListDosen); $i++){
            echo $ListDosen[$i] . "<br>";
        }
        // echo $ListDosen[2] . "<br>";
        // echo $ListDosen[0] . "<br>";
        // echo $ListDosen[1] . "<br>";

        ?>
    </body>
</html>