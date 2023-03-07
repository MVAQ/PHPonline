<?php
/** 
 * DZ2 
 * Vladimir 
 * Task 1.1 
 */ 

 $go = true;
 
 $handle = fopen ("php://stdin","r");

 echo "Please give me number to Fizz: ";
 
 
 while(true){

    $fizz = fgets($handle);

       if(preg_match("|^[\d]*$|", $fizz)) {
        break;
     }
     echo "Enter data as a number";
     echo PHP_EOL;
 }
 
 echo "Please give me number Buzz: ";
 
 while(true){

    $buzz = fgets($handle);

       if(preg_match("|^[\d]*$|", $buzz)) {
        break;
     }

     echo "Enter data as a number";
     echo PHP_EOL;
 }

 echo "Please give me number end number: ";

 while(true){

    $end = fgets($handle);

       if(preg_match("|^[\d]*$|", $end)) {
        break;
     }

     echo "Enter data as a number";
     echo PHP_EOL;
 }
  
 for ($i = 1; $i <= $end; $i++) {
 
     if ($i % $fizz === 0) {
         echo "F";
     } else if ($i % $buzz === 0) {
         echo "B";
     } else {
         echo $i;
     }
 
     echo " ";
 }
 
 echo PHP_EOL;