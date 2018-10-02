<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include 'classes/Activite.class.php';
        include 'classes/Lieux.class.php';
        include 'classes/SousActivite.class.php';
        
        $lieux1 = new Lieux(1,"Irish Bar","0405040504","Mende","15 rue jesaispas");
        $Activite1 = new Activite("Musique");
        $lieux2 = new Lieux(2,"Georges frêche","064567879","Mende","6 Boulevar pêche");
            
        echo'<pre>';
            var_dump($lieux1);
        echo '</pre><pre>';
            var_dump($lieux2);
        echo '</pre><pre>';
            var_dump($Activite1);
        echo '</pre>';
            
        $SousActivite1 = new SousActivite($Activite1,"Rock");
        $Activite1-> Lieux = [$lieux1,$lieux2];
            
        echo '<pre>';
            var_dump($Activite1);
        echo '</pre><pre>';
        //    $liste = $Activite1->getLieuActivite();
        //    var_dump($liste);
        echo '</pre>';
        
        ?>
    </body>
</html>
