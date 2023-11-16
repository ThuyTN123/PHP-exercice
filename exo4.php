<!DOCTYPE html>
<html>
<body>

<?php  
echo "Tableau notes sont: <br>";
$notes = array(15, 18, 55, 35,20,66,99,55,88,51,17,44,23); 

foreach ($notes as $value) {
  echo "$value"."_";
}
$s1=0;
$s2=0;
$i1=0;
foreach ($notes as $value) {
    $s1+=$value;
    $i1+=1;
  }
for ($i=0; $i<$i1 ; $i++) { 
    $s2+=$notes[$i];
   
  }

echo "<br> <br> Average value of notes:" ."<strong>".round($s1/$i1)."</strong>";
echo "<br> Sumary value of notes: <b> $s1 </b>";


echo "<br><br> Average value of notes:" ."<strong>".round($s2/$i1)."</strong>";
echo "<br> Sumary value of notes: <b> $s2 </b>";

$sum=0;
$sum=array_sum($notes);
$ii = count($notes);
$tb = $sum/$ii;
echo "<br> <br> <br>Average value of notes:" ."<strong>".round($tb,1)."</strong>";
echo "<br> Sumary value of notes: <b> $sum </b>";


?>  

</body>
</html>
