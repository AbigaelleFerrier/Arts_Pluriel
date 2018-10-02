
<?php

$depart = str_replace(' ','+',$_POST['depart']);
$destination = str_replace(' ','+',$_POST['destination']);
?>
 
<iframe width="600" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCebUJDpJCpZVh4aIbfSOt9jZziPYV620A&origin=<?php echo $depart; ?>&destination=<?php echo $destination; ?>&avoid=tolls|highways&mode=driving">
</iframe>
