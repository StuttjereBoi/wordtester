<?php
  session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WoordjesTester</title>
    <link rel="stylesheet" href="/wordtester/css/homepage.css">
  </head>
  <body>
    <div class="container">
    <div class="title"><h1>Voer woordjes in.</h1></div>
    <form method="get">
      <!--Set Languages-->
      <div class="taal1"><h3>Taal 1</h3>
      <input type="text" autocomplete="off" class="taal1txt" name="taal1" value=""></div>
      <div class="taal2"><h3>Taal 2</h3>
      <input type="text" autocomplete="off" name="taal2" class="taal2txt" value="">
      </div>
      <!--Question One-->
      <input type="text" autocomplete="off" class="question" name="Qone" value="">
      <input type="text" autocomplete="off" name="ansOne" class="answer" value="">
      <!--Question Two-->
      <input type="text" autocomplete="off" class="question" name="Qtwo" value="">
      <input type="text" autocomplete="off" name="ansTwo" class="answer" value="">
      <!--Question Three-->
      <input type="text" autocomplete="off" class="question" name="Qthree" value="">
      <input type="text" autocomplete="off" name="ansThree"  class="answer" value="">
      <!--Question Four-->
      <input type="text" autocomplete="off" class="question" name="Qfour" value="">
      <input type="text" autocomplete="off" name="ansFour" class="answer"  value="">
      <!--Question Five-->
      <input type="text" autocomplete="off" class="question" name="Qfive" value="">
      <input type="text" autocomplete="off" name="ansFive" class="answer"  value="">
      <!--Question Six-->
      <input type="text" autocomplete="off" class="question" name="Qsix" value="">
      <input type="text" autocomplete="off" name="ansSix" class="answer" value="">
      <!--Question Seven-->
      <input type="text" autocomplete="off" class="question" name="Qseven" value="">
      <input type="text" autocomplete="off" name="ansSeven" class="answer" value="">
      <!--Question Eight-->
      <input type="text" autocomplete="off" class="question" name="Qeight" value="">
      <input type="text" autocomplete="off" name="ansEight" class="answer" value="">
      <!--Question Nine-->
      <input type="text" autocomplete="off" class="question" name="Qnine" value="">
      <input type="text" autocomplete="off" name="ansNine" class="answer"  value="">
      <!--Question Ten-->
      <input type="text" autocomplete="off" class="question" name="Qten" value="">
      <input type="text" autocomplete="off" name="ansTen" class="answer" value="">

      <button class="btn" name="btn">Convert</button>
      <button class="btn2" name="delete">Verwijder</button>
    </form>
    <?php

      if(!isset($_GET['btn'])){
      }else{
        if(isset($_GET['taal1']) && isset($_GET['taal2'])){
        $_SESSION['T1']=$_GET['taal1'];
        $_SESSION['T2']=$_GET['taal2'];  
        }
        // Question 1 //
        if(isset($_GET['Qone']) && isset($_GET['ansOne'])){
        $_SESSION['Q1']=$_GET['Qone'];
        $_SESSION['A1']=$_GET['ansOne'];
        }
        // Question 2 //
        if(isset($_GET['Qtwo']) && isset($_GET['ansTwo'])){
        $_SESSION['Q2']=$_GET['Qtwo'];
        $_SESSION['A2']=$_GET['ansTwo'];
        }
        // Question 3 //
        if(isset($_GET['Qthree']) && isset($_GET['ansThree'])){
        $_SESSION['Q3']=$_GET['Qthree'];
        $_SESSION['A3']=$_GET['ansThree'];
        }
        // Question 4 //
        if(isset($_GET['Qfour']) && isset($_GET['ansFour'])){
        $_SESSION['Q4']=$_GET['Qfour'];
        $_SESSION['A4']=$_GET['ansFour'];
        }
        // Question 5 //
        if(isset($_GET['Qfive']) && isset($_GET['ansFive'])){
        $_SESSION['Q5']=$_GET['Qfive'];
        $_SESSION['A5']=$_GET['ansFive'];
        }
        // Question 6 //
        if(isset($_GET['Qsix']) && isset($_GET['ansSix'])){
        $_SESSION['Q6']=$_GET['Qsix'];
        $_SESSION['A6']=$_GET['ansSix'];
        }
        // Question 7 //
        if(isset($_GET['Qseven']) && isset($_GET['ansSeven'])){
        $_SESSION['Q7']=$_GET['Qseven'];
        $_SESSION['A7']=$_GET['ansSeven'];
        }
        // Question 8 //
        if(isset($_GET['Qeight']) && isset($_GET['ansEight'])){
        $_SESSION['Q8']=$_GET['Qeight'];
        $_SESSION['A8']=$_GET['ansEight'];
        }
        // Question 9 //
        if(isset($_GET['Qnine']) && isset($_GET['ansNine'])){
        $_SESSION['Q9']=$_GET['Qnine'];
        $_SESSION['A9']=$_GET['ansNine'];
        }
        // Question 10 //
        if(isset($_GET['Qten']) && isset($_GET['ansTen'])){
        $_SESSION['Q10']=$_GET['Qten'];
        $_SESSION['A10']=$_GET['ansTen'];
        }
      }

      if(isset($_GET['delete'])){
        unset($Q1);
        unset($Q2);
        unset($Q3);
        unset($Q4);
        unset($Q5);
        unset($A1);
        unset($A2);
        unset($A3);
        unset($A4);
        unset($A5);
        unset($Q6);
        unset($Q7);
        unset($Q8);
        unset($Q9);
        unset($Q10);
        unset($A6);
        unset($A7);
        unset($A8);
        unset($A9);
        unset($A10);
      }else{}


     ?>
     <a class="send" href="testOne.php"><p>Start</p></a>
   </div>
  </body>
</html>
