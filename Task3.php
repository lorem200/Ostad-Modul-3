<?php
$grades = [85, 92, 78, 88, 95];
function sortedGardes($grades) { 
  rsort($grades);
  print_r($grades);
}

sortedGardes($grades);

?>