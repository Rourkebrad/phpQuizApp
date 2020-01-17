<?php
include('inc/questions.php');
include('inc/quiz.php');
include('inc/generate_questions.php');

// Calculate correct answer

 if(isset($_POST['answer']))
{
$AnswerSelected = $_POST['answer'];

if($AnswerSelected == $correct)
{
  echo "Correct";
}
else {
  echo "incorrect";
}

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div id="quiz-box">
            <p class="breadcrumbs"><?php echo "Question " . $questionNo;?> of <?php echo $totalQuestions?></p>
            <p class="quiz">What is <?php echo $leftAdder;?> + <?php echo $rightAdder;?>?</p>

            <p class="breadcrumbs">Select answer below</p>
            <form action="index.php" method="post">
                <input type="hidden" name="id" value="0" />
                <input type="submit" class="btn" name="answer" value="<?php echo $shuffleAnswer[0];?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $shuffleAnswer[1];?>" />
                <input type="submit" class="btn" name="answer" value="<?php echo $shuffleAnswer[2];?>" />

            </form>
        </div>
    </div>
</body>
</html>
