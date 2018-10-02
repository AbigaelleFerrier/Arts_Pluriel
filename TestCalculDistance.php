<?php

    include 'Admin.class.php';
    include 'Admin.manager.php';

    //$adminManager = new AdminManager();

    //var_dump($adminManager);

?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>HTML5 : Géolocalisation</title>
    </head>
<body>


<!-- Un élément HTML pour recueillir l’affichage -->
<div id="infoposition"></div>

<script>
    function convertRad(input){
        return (Math.PI * input)/180;
    }

    function Distance(lat_a_degre, lon_a_degre, lat_b_degre, lon_b_degre){
        
        R = 6378000 //Rayon de la terre en mètre 

        lat_a = convertRad(lat_a_degre);
        lon_a = convertRad(lon_a_degre);
        lat_b = convertRad(lat_b_degre);
        lon_b = convertRad(lon_b_degre);
        
        d = R * (Math.PI/2 - Math.asin( Math.sin(lat_b) * Math.sin(lat_a) + Math.cos(lon_b - lon_a) * Math.cos(lat_b) * Math.cos(lat_a)))
        return d;
    }



    function maPosition(position) {
         R = 6378000 //Rayon de la terre en mètre 

        lat_a = convertRad(position.coords.latitude);
        lon_a = convertRad(position.coords.longitude);
        lat_b = convertRad(position.coords.latitude);
        lon_b = convertRad(position.coords.longitude);
        
        d = R * (Math.PI/2 - Math.asin( Math.sin(lat_b) * Math.sin(lat_a) + Math.cos(lon_b - lon_a) * Math.cos(lat_b) * Math.cos(lat_a)))
        
        document.getElementById('infoposition').innerHTML = d;

    }

    if(navigator.geolocation)
        navigator.geolocation.getCurrentPosition(maPosition);

</script>
</body>
</html>