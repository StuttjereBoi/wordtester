<?php
session_start();
$i = "";
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/wordtester/css/testOne.css">
  </head>
  <body>
    <div class="container">
      <div class="title"><h1>Vul in</h1></div>
      <div class="vra"><h3>Vraag:</h3></div>
      <div class="ant"><h3>Antwoord:</h3></div>
    <form method="get">
      <!--Question 1-->
      <?php
      if(!isset($_SESSION['Q1']) || ($_SESSION['Q1'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' readonly='true' value=".$_SESSION['Q1']."?>";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q1'] !== "")
      echo '<input type="text" class="fill" name="fillOne" value="">';
      ?>

      <!--Question 2-->
      <?php
      if(!isset($_SESSION['Q2']) || ($_SESSION['Q2'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' readonly='true' value=".$_SESSION['Q2']."?>";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q2'] !== "")
      echo '<input type="text" class="fill" name="fillTwo" value="">';
      ?>

      <!--Question 3-->
      <?php
      if(!isset($_SESSION['Q3']) || ($_SESSION['Q3'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' readonly='true' value=".$_SESSION['Q3']."?>";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q3'] !== "")
      echo '<input type="text" class="fill" name="fillThree" value="">';
      ?>

      <!--Question 4-->
      <?php
      // als er een vraag is.
      if(!isset($_SESSION['Q4']) || ($_SESSION['Q4'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' readonly='true' value=".$_SESSION['Q4']."?>";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q4'] !== "")
      echo '<input type="text" class="fill" name="fillFour" value="">';
      ?>

      <!--Question 5-->
      <?php
      if(!isset($_SESSION['Q5']) || ($_SESSION['Q5'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' readonly='true' value=".$_SESSION['Q5']."?>";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q5'] !== "")
      echo '<input type="text" class="fill" name="fillFive" value="">';
      ?>

      <!--Question 6-->
      <?php
      if(!isset($_SESSION['Q6']) || ($_SESSION['Q6'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' readonly='true' value=".$_SESSION['Q6']."?>";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q6'] !== "")
      echo '<input type="text" class="fill" name="fillSix" value="">';
      ?>

      <!--Question 7-->
      <?php
      if(!isset($_SESSION['Q7']) || ($_SESSION['Q7'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' readonly='true' value=".$_SESSION['Q7']."?>";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q7'] !== "")
      echo '<input type="text" class="fill" name="fillSeven" value="">';
      ?>

      <!--Question 8-->
      <?php
      if(!isset($_SESSION['Q8']) || ($_SESSION['Q8'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' readonly='true' value=".$_SESSION['Q8']."?>";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q8'] !== "")
      echo '<input type="text" class="fill" name="fillEight" value="">';
      ?>

      <!--Question 9-->
      <?php
      if(!isset($_SESSION['Q9']) || ($_SESSION['Q9'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' readonly='true' value=".$_SESSION['Q9']."?>";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q9'] !== "")
      echo '<input type="text" class="fill" name="fillNine" value="">';
      ?>

      <!--Question 10-->
      <?php
      if(!isset($_SESSION['Q10']) || ($_SESSION['Q10'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' readonly='true' value=".$_SESSION['Q10']."?>";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q10'] !== "")
      echo '<input type="text" class="fill" name="fillTen" value="">';
      ?>


      <button name="press" class="btn">press</button>
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
        echo '<div class="punten"><p>je hebt 10% goed</p></div>';
        break;
      }
      case 2:
      {
        echo '<div class="punten"><p>je hebt 20% goed</p></div>';
        break;
      }
      case 3:
      {
      echo '<div class="punten"><p>je hebt 30% goed</p></div>';
      break;
    }
      case 4:
      {
        echo '<div class="punten"><p>je hebt 40% goed</p></div>';
        break;
      }
      case 5:
      {
        echo '<div class="punten"><p>je hebt 50% goed</p></div>';
        break;
      }
      case 6:
      {
        echo '<div class="punten"><p>je hebt 60% goed</p></div>';
        break;
      }
      case 7:
      {
        echo '<div class="punten"><p>je hebt 70% goed</p></div>';
        break;
      }
      case 8:
      {
        echo '<div class="punten"><p>je hebt 80% goed</p></div>';
        break;
      }
      case 9:
      {
        echo '<div class="punten"><p>je hebt 90% goed</p></div>';
        break;
      }
      case 10:
      {
        echo '<div class="punten"><p>je hebt alles goed, 100%!</p></div>';
        break;
      }
      default:
      {
        echo '<div class="punten"><p>je hebt 0% goed</p></div>';
      }
      break;
      }
     ?>
     <a href="index.php" class="terug">terug</a>
   </div>
  </body>
</html>
