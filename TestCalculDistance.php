<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>HTML5 : Géolocalisation</title>
    </head>
<body>


<!-- Un élément HTML pour recueillir l’affichage -->
<div id="infoposition">
    

<?php

    echo distance(44.5259776, 3.4701312, 44.5545281, 4.7103981);

    function distance($lat1, $lng1, $lat2, $lng2, $unit = 'k') {
        $earth_radius = 6378137;   // Terre = sphère de 6378km de rayon
        $rlo1 = deg2rad($lng1);
        $rla1 = deg2rad($lat1);
        $rlo2 = deg2rad($lng2);
        $rla2 = deg2rad($lat2);
        $dlo = ($rlo2 - $rlo1) / 2;
        $dla = ($rla2 - $rla1) / 2;
        $a = (sin($dla) * sin($dla)) + cos($rla1) * cos($rla2) * (sin($dlo) * sin($dlo));
        $d = 2 * atan2(sqrt($a), sqrt(1 - $a));
        //
        $meter = ($earth_radius * $d);
        if ($unit == 'k') {
            return $meter / 1000;
        }
        return $meter;
    }


?>



</div>

    <!-- <script>
        if(navigator.geolocation)
            navigator.geolocation.getCurrentPosition(maPosition);
    </script> -->



</body>
</html>