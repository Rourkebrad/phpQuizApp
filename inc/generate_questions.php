<?php
// Generate random questions
$leftAdder = rand(0,20);
$rightAdder = rand(0,20);
$correct = $leftAdder + $rightAdder; // Get random numbers to add
$firstIncorrectRange = rand(1,10); // Get incorrect answers within 10 numbers either way of correct answer
$secondIncorrectRange = rand(1,10); // Get incorrect answers within 10 numbers either way of correct answer
$firstIncorrect = $correct + $firstIncorrectRange; // Get incorrect answers within 10 numbers either way of correct answer
$secondIncorrect = $correct - $secondIncorrectRange; // Get incorrect answers within 10 numbers either way of correct answer

//$question1[] = array($leftAdder, $rightAdder, $correct, $firstIncorrect, $secondIncorrect); // Add question and answer to questions array

$totalQuestions = 10;
$questionNo = 1;
$shuffleAnswer = array($correct, $firstIncorrect, $secondIncorrect);
shuffle($shuffleAnswer);

// Loop for required number of questions
function questionCounter($questionNo)
{
  $questionNo ++;
  return $questionNo;
}




// Make sure it is a unique answer
if($firstIncorrect == $secondIncorrect)
  {
    $firstIncorrect = $firstIncorrect - 1;
  }
  elseif ($secondIncorrect == $correct)
  {
    $secondIncorrect = $secondIncorrect - 1;
  }
