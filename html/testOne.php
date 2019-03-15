<?php
session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/wordtester/css/testOne.css">
  </head>
  <body>
    <!--Changes-->
    <?php
    if(!isset($_GET['press'])){
    $disApp = "";
    $disTit = '<h1>Vul in</h1>';
    }else{
    $disApp = 'hidden="false"';
    $disTit = '<h1>Nakijken</h1>';
    }
    ?>
    <div class="container">
      <div class="title"><?php echo $disTit; ?></div>
      <div class="taal1"><h3><?php echo $_SESSION['T1']; ?></h3></div>
      <div class="taal2"><h3><?php echo $_SESSION['T2']; ?></h3></div>
    <form method="get">
      <!--Question 1-->
      <?php
      if(!isset($_SESSION['Q1']) || ($_SESSION['Q1'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' disabled='disabled' value=".$_SESSION['Q1'].">";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q1'] !== ""){
      echo '<input type="text" class="fill" autocomplete="off" name="fillOne" value="">';
      }else{}
      ?>

      <!--Question 2-->
      <?php
      if(!isset($_SESSION['Q2']) || ($_SESSION['Q2'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' disabled='disabled' value=".$_SESSION['Q2'].">";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q2'] !== "")
      echo '<input type="text" class="fill" autocomplete="off" name="fillTwo" value="">';
      ?>

      <!--Question 3-->
      <?php
      if(!isset($_SESSION['Q3']) || ($_SESSION['Q3'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' disabled='disabled' value=".$_SESSION['Q3'].">";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q3'] !== "")
      echo '<input type="text" class="fill" autocomplete="off" name="fillThree" value="">';
      ?>

      <!--Question 4-->
      <?php
      // als er een vraag is.
      if(!isset($_SESSION['Q4']) || ($_SESSION['Q4'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' disabled='disabled' value=".$_SESSION['Q4'].">";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q4'] !== "")
      echo '<input type="text" class="fill" autocomplete="off" name="fillFour" value="">';
      ?>

      <!--Question 5-->
      <?php
      if(!isset($_SESSION['Q5']) || ($_SESSION['Q5'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' disabled='disabled' value=".$_SESSION['Q5'].">";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q5'] !== "")
      echo '<input type="text" class="fill"  autocomplete="off"name="fillFive" value="">';
      ?>

      <!--Question 6-->
      <?php
      if(!isset($_SESSION['Q6']) || ($_SESSION['Q6'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' disabled='disabled' value=".$_SESSION['Q6'].">";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q6'] !== "")
      echo '<input type="text" class="fill"  autocomplete="off"name="fillSix" value="">';
      ?>

      <!--Question 7-->
      <?php
      if(!isset($_SESSION['Q7']) || ($_SESSION['Q7'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' disabled='disabled' value=".$_SESSION['Q7'].">";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q7'] !== "")
      echo '<input type="text" class="fill" autocomplete="off" name="fillSeven" value="">';
      ?>

      <!--Question 8-->
      <?php
      if(!isset($_SESSION['Q8']) || ($_SESSION['Q8'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' disabled='disabled' value=".$_SESSION['Q8'].">";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q8'] !== "")
      echo '<input type="text" class="fill" autocomplete="off" name="fillEight" value="">';
      ?>

      <!--Question 9-->
      <?php
      if(!isset($_SESSION['Q9']) || ($_SESSION['Q9'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' disabled='disabled' value=".$_SESSION['Q9'].">";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q9'] !== "")
      echo '<input type="text" class="fill" autocomplete="off" name="fillNine" value="">';
      ?>

      <!--Question 10-->
      <?php
      if(!isset($_SESSION['Q10']) || ($_SESSION['Q10'] == "")){
      echo "";
      }else{
      echo "<input type='text' class='qn' disabled='disabled' value=".$_SESSION['Q10'].">";
      }?>
      <?php
      // als er een vraag is
      if($_SESSION['Q10'] !== "")
      echo '<input type="text" class="fill" autocomplete="off" name="fillTen" value="">';
      ?>


      <button name="press" class="btn"<?php echo $disApp; ?>><p>Nakijken</p></button>
    </form>
    <?php
    $punten = 0;
    // Check //
    if(isset($_GET['press'])){
    // Question 1 //
    if(isset($_GET['fillOne']) && isset($_SESSION['A1'])){
    if($_GET['fillOne'] == $_SESSION['A1']){
    $punten++;
    }
    }
    // Question 2 //
    if(isset($_GET['fillTwo']) && isset($_SESSION['A2'])){
    if($_GET['fillTwo'] == $_SESSION['A2']){
    $punten++;
    }
    }
    // Question 3 //
    if(isset($_GET['fillThree']) && isset($_SESSION['A3'])){
    if($_GET['fillThree'] == $_SESSION['A3']){
    $punten++;
    }
    }
    // Question 4 //
    if(isset($_GET['fillFour']) && isset($_SESSION['A4'])){
    if($_GET['fillFour'] == $_SESSION['A4']){
    $punten++;
    }
    }
    // Question 5 //
    if(isset($_GET['fillFive']) && isset($_SESSION['A5'])){
    if($_GET['fillFive'] == $_SESSION['A5']){
    $punten++;
    }
    }
    // Question 6 //
    if(isset($_GET['fillSix']) && isset($_SESSION['A6'])){
    if($_GET['fillSix'] == $_SESSION['A6']){
    $punten++;
    }
    }
    // Question 7 //
    if(isset($_GET['fillSeven']) && isset($_SESSION['A7'])){
    if($_GET['fillSeven'] == $_SESSION['A7']){
    $punten++;
    }
    }
    // Question 8 //
    if(isset($_GET['fillEight']) && isset($_SESSION['A8'])){
    if($_GET['fillEight'] == $_SESSION['A8']){
    $punten++;
    }
    }
    // Question 9 //
    if(isset($_GET['fillNine']) && isset($_SESSION['A9'])){
    if($_GET['fillNine'] == $_SESSION['A9']){
    $punten++;
    }
    }
    // Question 10 //
    if(isset($_GET['fillTen']) && isset($_SESSION['A10'])){
    if($_GET['fillTen'] == $_SESSION['A10']){
    $punten++;
    }
    }
    switch ($punten) {
      case 1:
      {
        echo '<input type="text" class="punten" value="je hebt 10% goed">';
        break;
      }
      case 2:
      {
        echo '<input type="text" class="punten" value="je hebt 20% goed">';
        break;
      }
      case 3:
      {
      echo '<input type="text" class="punten" value="je hebt 30% goed">';
      break;
    }
      case 4:
      {
        echo '<input type="text" class="punten" value="je hebt 40% goed">';
        break;
      }
      case 5:
      {
        echo '<input type="text" class="punten" value="je hebt 50% goed">';
        break;
      }
      case 6:
      {
        echo '<input type="text" class="punten" value="je hebt 60% goed">';
        break;
      }
      case 7:
      {
        echo '<input type="text" class="punten" value="je hebt 70% goed">';
        break;
      }
      case 8:
      {
        echo '<input type="text" class="punten" value="je hebt 80% goed">';
        break;
      }
      case 9:
      {
        echo '<input type="text" class="punten" disabled="true" value="je hebt 90% goed">';
        break;
      }
      case 10:
      {
        echo '<input type="text" class="punten" value="je hebt alles goed, 100%!">';
        break;
      }
      default:
      {
        echo '<input type="text" class="punten" disabled="true" value="je hebt 0% goed">';
      }
      break;
      }
      echo '<a href="index.php" class="terug">terug</a>';
      }
     ?>
   </div>
  </body>
</html>
