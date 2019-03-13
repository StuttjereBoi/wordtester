<?php
session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get">
      <!--Question 1-->
      <p><?php
      if($_SESSION['Q1']){
      echo "you didn't fill anything in.";
      }else{
      echo 'vraag 1 : '.$_SESSION['Q1'];
      }?></p>
      <input type="text" name="fillOne" value="">
      <!--Question 2-->
      <p><?php
      if($_SESSION['Q2']){
      echo "you didn't fill anything in.";
      }else{
      echo 'vraag 2 : '.$_SESSION['Q2'];
      }?></p>
      <input type="text" name="fillTwo" value="">
      <!--Question 3-->
      <p><?php
      if(!isset($_SESSION['Q3'])){
      echo "you didn't fill anything in.";
      }else{
      echo 'vraag 3 : '.$_SESSION['Q3'];
      }?></p>
      <input type="text" name="fillThree" value="">
      <!--Question 4-->
      <p><?php
      if(!isset($_SESSION['Q4'])){
      echo "you didn't fill anything in.";
      }else{
      echo 'vraag 4 : '.$_SESSION['Q4'];
      }?></p>
      <input type="text" name="fillFour" value="">
      <!--Question 5-->
      <p><?php
      if(!isset($_SESSION['Q5'])){
      echo "you didn't fill anything in.";
      }else{
      echo 'vraag 5 : '.$_SESSION['Q5'];
      }?></p>
      <input type="text" name="fillFive" value="">


      <button name="press">press</button>
    </form>
    <?php

    $punten = 0;

    // Question 1 //
    if(isset($_GET['press'])){
    if($_GET['fillOne'] == $_SESSION['A1']){
    $punten++;
    }
    }else{}
    // Question 1 //
    if(isset($_GET['press'])){
    if($_GET['fillTwo'] == $_SESSION['A2']){
    $punten++;
    }
    }else{}
    // Question 1 //
    if(isset($_GET['press'])){
    if(isset($_GET['fillThree']) == $_SESSION['A3']){
    $punten++;
    }else{}
    }else{}
    // Question 1 //
    if(isset($_GET['press'])){
    if(isset($_GET['fillFour']) == $_SESSION['A4']){
    $punten++;
    }else{}
    }else{}
    // Question 1 //
    if(isset($_GET['press'])){
    if(isset($_GET['fillFive']) == $_SESSION['A5']){
    $punten++;
    }else{}
    }else{}
    ?>
    <?php
    switch ($punten) {
      case 1:{
        echo "je hebt 0 vragen goed oof";
        break;
      }
      case 2:
      {
        echo "je hebt 1 vraag goed, Noob";
        break;
      }
      case 3:
      {
        echo "je hebt 2 vragen goed, Vegan";
        break;
      }
      case 4:
      {
      echo "je hebt 3 vragen goed, Probeer nog een keer";
      break;
    }
      case 5:
      {
        echo "je hebt 1 fout, Goed";
        break;
      }
      case 6:
      {
        echo "je alles goed, Perfect";
        break;
      }
      default;
      break;
      }
     ?>
  </body>
</html>
