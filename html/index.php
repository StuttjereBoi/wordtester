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
      <input type="text" name="ansOne" value="" style="background-color:red;">
      <!--Question Two-->
      <input type="text" name="Qtwo" value="">
      <input type="text" name="ansTwo" value="" style="background-color:blue;">
      <!--Question Three-->
      <input type="text" name="Qthree" value="">
      <input type="text" name="ansThree" value="" style="background-color:yellow;">
      <!--Question Four-->
      <input type="text" name="Qfour" value="">
      <input type="text" name="ansFour" value="" style="background-color:purple;">
      <!--Question Five-->
      <input type="text" name="Qfive" value="">
      <input type="text" name="ansFive" value="" style="background-color:green;">

      <button name="btn">press</button>
      <button name="delete">delete</button>
    </form>
    <?php

      if(!isset($_GET['btn'])){
      }else{
        $Q1= $_GET['Qone'];
        $_SESSION['Q1']=$Q1;
        $A1= $_GET['ansOne'];
        $_SESSION['A1']=$A1;
        // Question 2 //
        $Q2= $_GET['Qtwo'];
        $_SESSION['Q2']=$Q2;
        $A2= $_GET['ansTwo'];
        $_SESSION['A2']=$A2;
        // Question 3 //
        $Q3= $_GET['Qthree'];
        $_SESSION['Q3']=$Q3;
        $A3= $_GET['ansThree'];
        $_SESSION['A3']=$A3;
        // Question 4 //
        $Q4= $_GET['Qfour'];
        $_SESSION['Q4']=$Q4;
        $A4= $_GET['ansFour'];
        $_SESSION['A4']=$A4;
        // Question 5 //
        $Q5= $_GET['Qfive'];
        $_SESSION['Q5']=$Q5;
        $A5= $_GET['ansFive'];
        $_SESSION['A5']=$A5;
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
