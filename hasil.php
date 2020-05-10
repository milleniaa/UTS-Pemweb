<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Tes Kepribadian EPPS</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="page-wrap">
        <h1 class="transparent index-headline" >Hasil yang Anda Dapatkan...</h1>
        
        <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];

            $totalA = 0;
            $totalB = 0;

            if ($answer1 == "A") { $totalA = $totalA + 0; }
            if ($answer1 == "B") { $totalB = $totalB + 0; }

            if ($answer2 == "A") { $totalA = $totalA + 0; }
            if ($answer2 == "B") { $totalB = $totalB + 0; }

            if ($answer3 == "A") { $totalA = $totalA + 0; }
            if ($answer3 == "B") { $totalB = $totalB + 0; }

            if ($answer4 == "A") { $totalA = $totalA + 0; }
            if ($answer4 == "B") { $totalB = $totalB + 0; }

            if ($answer5 == "A") { $totalA = $totalA + 0; }
            if ($answer5 == "B") { $totalB = $totalB + 0; }

            ?>