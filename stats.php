<?php
  session_start();
  require('config/config.php');
  require('config/db.php');

  # Session Check
  if (isset($_SESSION['previous'])) {
    if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
      session_destroy();
    }
  }

  // Age Dense
  function personAgeDense($conn, $query){
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
  }

  $a30 = personAgeDense($conn, "SELECT age, COUNT(*) as 'A30' FROM official_tbl WHERE age < 30");
  $a31_50 = personAgeDense($conn, "SELECT age, COUNT(*) as 'A31_50' FROM official_tbl WHERE age BETWEEN 30 AND 50");
  $a51 = personAgeDense($conn, "SELECT age, COUNT(*) as 'A51' FROM official_tbl WHERE age > 50");

  // Peson Affiliate Dense
  function personAfDense($conn, $query){
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
  }

  $pad = personAfDense($conn, "SELECT party, COUNT(*) as 'members' FROM official_tbl GROUP BY party");
?>
<?php require('inc/header.php') ?>

    <h1 class="page-header">
      <span class="glyphicon glyphicon-stats"></span> Statistics  
    </h1>

    <h2 class="sub-header"><span class="glyphicon glyphicon-asterisk"></span> Age</h2>
      <input type="hidden" id="a30" value="<?php echo $a30['A30']; ?>">
      <input type="hidden" id="a31_50" value="<?php echo $a31_50['A31_50']; ?>">
      <input type="hidden" id="a51" value="<?php echo $a51['A51']; ?>">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <canvas id="ageChart"></canvas>
    </div>
    <div class="col-md-3"></div>
    <div class="clearfix"></div>
    <h2 class="sub-header"><span class="glyphicon glyphicon-asterisk"></span> Party Affiliate</h2>
      <div class="hidden">
        <?php foreach($pad as $pa) :?>
          <p class="party"><?php echo $pa['party']; ?></p><span class="members"><?php echo $pa['members']; ?></span>
        <?php endforeach ?>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <canvas id="partyChart"></canvas>
    </div>
    <div class="col-md-1"></div>
    <div class="clearfix"></div>

<?php require('inc/footer.php') ?>