<?php
  session_start();
  require('config/config.php');
  require('config/db.php');

  $_SESSION['previous'] = basename($_SERVER['PHP_SELF']);

  # Session Check
  if (isset($_SESSION['previous'])) {
    if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
      session_destroy();
    }
  }

  // Add
  if(isset($_POST['btn-add'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $reg = mysqli_real_escape_string($conn, $_POST['reg']);
    $pro = mysqli_real_escape_string($conn, $_POST['pro']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $pos = mysqli_real_escape_string($conn, $_POST['pos']);
    $pa = mysqli_real_escape_string($conn, $_POST['pa']);

    $query = "INSERT INTO official_tbl(name, age, region, province, city, position, party) VALUES('$name', '$age', '$reg', '$pro', '$city', '$pos', '$pa')";

    if (mysqli_query($conn, $query)) {
      $_SESSION['prompt'] = array(
        'message' => 'Information successfully added!', 
        'isError' => false
      );
      header('Location: '.ROOT_URL.'');
    }else{
      echo 'Error: '.mysqli_error($conn);
    }
  }

  // Delete
  if(isset($_POST['btn-delete'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $query = "DELETE FROM official_tbl WHERE id={$id}";

     if (mysqli_query($conn, $query)) {
      $_SESSION['prompt'] = array(
        'message' => 'Information successfully deleted!', 
        'isError' => false
      );
      header('Location: '.ROOT_URL.'');
    }else{
      echo 'Error: '.mysqli_error($conn);
    }
  }

  $query = "SELECT * FROM official_tbl";
  $result = mysqli_query($conn, $query);
  $officials = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  mysqli_close($conn);
?>
<?php require('inc/header.php') ?>

<?php $prompt = (!empty($_SESSION['prompt'])) ? $_SESSION['prompt'] : ''; ?>
<?php if(!empty($prompt)) :?>
  <?php if((!$prompt['isError'])) :?>
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <?php echo $prompt['message']; ?>
    </div>
  <?php else :?>
    <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <?php echo $prompt['message']; ?>
    </div>
  <?php endif ?>
<?php endif ?>

<h1 class="page-header">
  <span class="glyphicon glyphicon-user"></span> Local Officials 
</h1>

<h2 class="sub-header">Master List
  <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#add-modal">Add New <span class="glyphicon glyphicon-plus-sign"></span></button>
  <div class="clearfix"></div>
</h2>

<div class="clearfix"></div>
<div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Region</th>
        <th>Province</th>
        <th>City/Municipality</th>
        <th>Position</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($officials as $official) :?>
      <tr>
        <td><?php echo $official['name']; ?></td>
        <td><?php echo $official['region']; ?></td>
        <td><?php echo $official['province']; ?></td>
        <td><?php echo $official['city']; ?></td>
        <td><?php echo $official['position']; ?></td>
        <td>
          <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <input name="id" type="hidden" value="<?php echo $official['id']; ?>">
            <a href="<?php echo ROOT_URL; ?>edit.php?id=<?php echo $official['id']; ?>" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="left" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>
            <button name="btn-delete" type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
<?php require('inc/footer.php') ?>