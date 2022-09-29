<?php
$kata = "a a b b c k k k m l";

$filter = array(".",",","!","?","(",")");
$banyak_huruf = str_replace($filter, "", $kata);

$huruf   = explode(" ", $banyak_huruf);
$hasil  = count($huruf);
$data   = array_count_values($huruf);
  
echo "<br> $kata";
echo "<br> $banyak_huruf";
echo "<hr>";

foreach($data as $x => $x_value) {
    echo $x."".$x_value;
}
?>
