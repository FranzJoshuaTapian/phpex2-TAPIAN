<?php 
class Process{
//FUNCTIONS
   //function of binary
   function countOnes($n){
      $count = 0;
         for($i=0;$i<strlen($n); $i++){
            if($n[$i]=='1') $count++;
               elseif($n[$i]=='0') {
                  $count-1;
            }else return;
         }return "Number of 1s:".$count;
   }

   // function of 2 parts
   function twoParts($part1,$part2){
      $partone=str_replace('/','',$part1);
         $parttwo=str_replace('/','',$part2);
            $wholepart = $partone.'/'.$parttwo; 
         return"Path:".$wholepart;

   }
}
?>