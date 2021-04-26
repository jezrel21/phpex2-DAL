<?php

// Create a PHP function that finds the maximum range of a triangle's last edge,
// where the side lengths are all integers.
function getMaxRangeTriangleLastEdge($s1, $s2)
{
  // If inputs are not integer and less than 1
  if ((!is_int($s1) || !is_int($s2)) || ($s1 < 1 || $s2 < 1)) {
    return "Error: Side 1 and Side 2 must be integer greater than 0";
  }

  $maxLength = $s1 + $s2 - 1;
  $minLength = max($s1, $s2) - min($s1, $s2) + 1;

  // If invalid triangle
  if ($minLength > $maxLength) {
    return "Error: Not a valid triangle";
  }

  return $maxLength;
}



// Create a PHP function that counts all the ones in the binary representation of an integer.
function countAllOnesInBinary($n)
{
  // If input is not an integer
  if(!is_int($n)){
    return "Error: Must enter a valid integer";
  }

  $count = 0;
  while ($n) {
    $count += $n & 1;
    $n >>= 1;
  }
  return $count;
}


// Create a function that receives 2 parts of a path. These 2 parts must be joined with “/” separator.
function joinParts($p1, $p2){
  $p1 = str_replace("/", "", $p1);
  $p2 = str_replace("/", "", $p2);

  return $p1 . "/" . $p2;
}


// Create a function that validates if a given number n is a Sastry number.
// Sastry number is a result from a concatenation of 
// an integer n with its successor.
function isSastryNumber($n)
{
  // If input is not an integer or less than 1
  if(!is_int($n) || $n < 1 ){
    return "Error: Must enter a valid integer greater than 0";
  }

  $n = $n . $n + 1;
  // Find floating point value
  // of square root of x.
  $sr = sqrt($n);
    
  // If square root is an integer
  return (($sr - floor($sr)) == 0) ? "TRUE" : "FALSE";
}

?>