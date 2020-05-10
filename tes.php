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
        <h1 class="transparent index-headline">Tes Kepribadian EPPS</h1>
<form action="grade.php" method="post" id="quiz">
            <ul id="test-questions">
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Pilihlah salah satu jawaban yang sesuai dengan karakter Anda</h3>
                    <div class="mtm">
                        <input type="epps" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A" class="fwrd labela">A.  Saya ingin dapat berbuat sekehendak hati saya.</label>
                    </div>
                    <div>
                        <input type="epps" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb">B.  Saya ingin bisa mengatakan bahwa saya telah melakukan dengan baik suatu pekerjaan yang sulit.</label>
                    </div>
                    <p class="quiz-progress">1 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Pilihlah salah satu jawaban yang sesuai dengan karakter Anda</h3>
                    <div class="mtm">
                        <input type="epps" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A" class="fwrd labela">A.  Saya suka berbicara tentang diri saya dengan orang lain.</label>
                    </div>
                    <div>
                        <input type="epps" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb">B.  Saya suka bekerja untuk suatu tujuan yang telah saya tentukan bagi diri saya.</label>
                    </div>
                    <p class="quiz-progress">2 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Pilihlah salah satu jawaban yang sesuai dengan karakter Anda</h3>
                    <div class="mtm">
                        <input type="epps" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A" class="fwrd labela">A.  Saya suka menolong teman-teman saya, bila mereka berada dalam kesulitan.</label>
                    </div>
                    <div>
                        <input type="epps" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb">B.  Saya ingin melakukan pekerjaan apa saja sebaik mungkin.</label>
                    </div>
                    <p class="quiz-progress">3 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Pilihlah salah satu jawaban yang sesuai dengan karakter Anda</h3>
                    <div class="mtm">
                        <input type="epps" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A" class="fwrd labela">A.  Saya ingin mengetahui bagaimana pandangan orang-orang besar mengenai berbagai masalah yang menarik perhatian saya.</label>
                    </div>
                    <div>
                        <input type="epps" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B" class="fwrd labelb">B.  Saya ingin menjadi seorang ahli yang diakui dalam salah satu pekerjaan atau sedang khusus.</label>
                    </div>
                    <p class="quiz-progress">4 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Pilihlah salah satu jawaban yang sesuai dengan karakter Anda</h3>
                    <div class="mtm">
                        <input type="epps" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">A.  Saya ingin agar setiap pekerjaan tulisan saya teliti, rapi, dan tersusun dengan baik.</label>
                    </div>
                    <div>
                        <input type="epps" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">B.  Saya ingin menjadi seorang ahli yang diakui dalam salah satu pekerjaan, jabatan atau bidang khusus.</label>
                    </div>
                    <p class="quiz-progress">5 of 5</p>
                </li>
                <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="anticipate">Tunggu Hasilnya...</h3>
                    <input type="submit" value="Submit" id="submit-quiz" />
                </li>
            </ul>
</form>
        <div class="nomargin"></div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    <script>
           (function($) {
              var timeout= null;
              var $mt = 0;
              $("#quiz .fwrd").click(function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){ 
                    $mt = $mt - 430;
                    $("#test-questions").css("margin-top", $mt); 
                }, 333);
              });
           }(jQuery))
    </script>
</body>
</html>