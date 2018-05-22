<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Chatroom</title>
   
</head>
<body>
<?php 
function mittelwert($z1,$z2,$z3){
$avg = ($z1+$z2+$z3)/3;
return $avg;
}

$erg = mittelwert(1,2,3);
echo $erg;
?>



</body>
</html>