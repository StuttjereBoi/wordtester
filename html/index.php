<?php
  session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>Woordjes tester</header>
    <form method="get">
      <!--Question One-->
      <input type="text" name="Qone" value="">
      <input type="text" name="ansOne" value="">
      <!--Question Two-->
      <input type="text" name="Qtwo" value="">
      <input type="text" name="ansTwo" value="">
      <!--Question Three-->
      <input type="text" name="Qthree" value="">
      <input type="text" name="ansThree" value="">
      <!--Question Four-->
      <input type="text" name="Qfour" value="">
      <input type="text" name="ansFour" value="">
      <!--Question Five-->
      <input type="text" name="Qfive" value="">
      <input type="text" name="ansFive" value="">
      <!--Question Six-->
      <input type="text" name="Qsix" value="">
      <input type="text" name="ansSix" value="">
      <!--Question Seven-->
      <input type="text" name="Qseven" value="">
      <input type="text" name="ansSeven" value="">
      <!--Question Eight-->
      <input type="text" name="Qeight" value="">
      <input type="text" name="ansEight" value="">
      <!--Question Nine-->
      <input type="text" name="Qnine" value="">
      <input type="text" name="ansNine" value="">
      <!--Question Ten-->
      <input type="text" name="Qten" value="">
      <input type="text" name="ansTen" value="">

      <button name="btn">press</button>
      <button name="delete">delete</button>
    </form>
    <?php

      if(!isset($_GET['btn'])){
      }else{
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
      }else{}


     ?>
     <a href="pagina2.php">hoi</a>
     <p>nou nee</p>
  </body>
</html>
