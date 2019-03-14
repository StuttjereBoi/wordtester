<?php
session_start();
$i = "";
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
      if(!isset($_SESSION['Q1']) || ($_SESSION['Q1'] == "")){
      echo "";
      }else{
      echo 'vraag 1 : '.$_SESSION['Q1'];
      }?></p>
      <?php
      // als er een vraag is
      if($_SESSION['Q1'] !== "")
      echo '<input type="text" name="fillOne" value="">';
      ?>
      <!--Question 2-->
      <p><?php
      if(!isset($_SESSION['Q2']) || ($_SESSION['Q2'] == "")){
      echo "";
      }else{
      echo 'vraag 2 : '.$_SESSION['Q2'];
      }?></p>
      <?php
      // als er een vraag is
      if($_SESSION['Q2'] !== "")
      echo '<input type="text" name="fillTwo" value="">';
      ?>

      <!--Question 3-->
      <p><?php
      if(!isset($_SESSION['Q3']) || ($_SESSION['Q3'] == "")){
      echo "";
      }else{
      echo 'vraag 3 : '.$_SESSION['Q3'];
      }?></p>
      <?php
      // als er een vraag is
      if($_SESSION['Q3'] !== "")
      echo '<input type="text" name="fillThree" value="">';
      ?>

      <!--Question 4-->
      <p><?php
      // als er een vraag is.
      if(!isset($_SESSION['Q4']) || ($_SESSION['Q4'] == "")){
      echo "";
      }else{
      echo 'vraag 4 : '.$_SESSION['Q4'];
      }?></p>
      <?php
      // als er een vraag is
      if($_SESSION['Q4'] !== "")
      echo '<input type="text" name="fillFour" value="">';
      ?>

      <!--Question 5-->
      <p><?php
      if(!isset($_SESSION['Q5']) || ($_SESSION['Q5'] == "")){
      echo "";
      }else{
      echo 'vraag 5 : '.$_SESSION['Q5'];
      }?></p>
      <?php
      // als er een vraag is
      if($_SESSION['Q5'] !== "")
      echo '<input type="text" name="fillFive" value="">';
      ?>

      <!--Question 6-->
      <p><?php
      if(!isset($_SESSION['Q6']) || ($_SESSION['Q6'] == "")){
      echo "";
      }else{
      echo 'vraag 6 : '.$_SESSION['Q6'];
      }?></p>
      <?php
      // als er een vraag is
      if($_SESSION['Q6'] !== "")
      echo '<input type="text" name="fillSix" value="">';
      ?>

      <!--Question 7-->
      <p><?php
      if(!isset($_SESSION['Q7']) || ($_SESSION['Q7'] == "")){
      echo "";
      }else{
      echo 'vraag 7 : '.$_SESSION['Q7'];
      }?></p>
      <?php
      // als er een vraag is
      if($_SESSION['Q7'] !== "")
      echo '<input type="text" name="fillSeven" value="">';
      ?>

      <!--Question 8-->
      <p><?php
      if(!isset($_SESSION['Q8']) || ($_SESSION['Q8'] == "")){
      echo "";
      }else{
      echo 'vraag 8 : '.$_SESSION['Q8'];
      }?></p>
      <?php
      // als er een vraag is
      if($_SESSION['Q8'] !== "")
      echo '<input type="text" name="fillEight" value="">';
      ?>

      <!--Question 9-->
      <p><?php
      if(!isset($_SESSION['Q9']) || ($_SESSION['Q9'] == "")){
      echo "";
      }else{
      echo 'vraag 9 : '.$_SESSION['Q9'];
      }?></p>
      <?php
      // als er een vraag is
      if($_SESSION['Q9'] !== "")
      echo '<input type="text" name="fillNine" value="">';
      ?>

      <!--Question 10-->
      <p><?php
      if(!isset($_SESSION['Q10']) || ($_SESSION['Q10'] == "")){
      echo "";
      }else{
      echo 'vraag 10 : '.$_SESSION['Q10'];
      }?></p>
      <?php
      // als er een vraag is
      if($_SESSION['Q10'] !== "")
      echo '<input type="text" name="fillTen" value="">';
      ?>


      <button name="press">press</button>
    </form>
    <?php
    $punten = 0;

    // Question 1 //
    if(isset($_GET['press'])){
    if($_GET['fillOne'] == $_SESSION['A1']){
    $punten++;
    }else{}
    }else{}
    // Question 2 //
    if(isset($_GET['press'])){
    if($_GET['fillTwo'] == $_SESSION['A2']){
    $punten++;
    }
    }else{}
    // Question 3 //
    if(isset($_GET['press'])){
    if($_GET['fillThree'] == $_SESSION['A3']){
    $punten++;
    }
    }else{}
    // Question 4 //
    if(isset($_GET['press'])){
    if($_GET['fillFour'] == $_SESSION['A4']){
    $punten++;
    }
    }else{}
    // Question 5 //
    if(isset($_GET['press'])){
    if($_GET['fillFive'] == $_SESSION['A5']){
    $punten++;
    }
    }else{}
    // Question 6 //
    if(isset($_GET['press'])){
    if($_GET['fillSix'] == $_SESSION['A6']){
    $punten++;
    }
    }else{}
    // Question 7 //
    if(isset($_GET['press'])){
    if($_GET['fillSeven'] == $_SESSION['A7']){
    $punten++;
    }else{}
    }else{}
    // Question 8 //
    if(isset($_GET['press'])){
    if($_GET['fillEight'] == $_SESSION['A8']){
    $punten++;
    }else{}
    }else{}
    // Question 9 //
    if(isset($_GET['press'])){
    if($_GET['fillNine'] == $_SESSION['A9']){
    $punten++;
    }else{}
    }else{}
    // Question 10 //
    if(isset($_GET['press'])){
    if($_GET['fillTen'] == $_SESSION['A10']){
    $punten++;
    }
    }else{}
    ?>
    <?php
    switch ($punten) {
      case 1:
      {
        echo "je hebt 10% goed";
        break;
      }
      case 2:
      {
        echo "je hebt 20% goed";
        break;
      }
      case 3:
      {
      echo "je hebt 30% goed";
      break;
    }
      case 4:
      {
        echo "je hebt 40% goed";
        break;
      }
      case 5:
      {
        echo "je hebt 50% goed";
        break;
      }
      case 6:
      {
        echo "je hebt 60% goed";
        break;
      }
      case 7:
      {
        echo "je hebt 70% goed";
        break;
      }
      case 8:
      {
        echo "je hebt 80% goed";
        break;
      }
      case 9:
      {
        echo "je hebt 90% goed";
        break;
      }
      case 10:
      {
        echo "je alles goed, 100%!";
        break;
      }
      default:
      {
        echo "je hebt 0% goed.";
      }
      break;
      }
     ?>
  </body>
</html>
