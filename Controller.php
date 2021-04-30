<?php 

      include ("Process.php");
      $result = new Process;

      echo "<br>" .$result -> countOnes($_GET['integer']);
      echo "<br>" .$result -> twoParts($_GET['part1'],$_GET['part2']);
   
   ?>
