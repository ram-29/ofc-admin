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

  // Get ID from URL
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  // Update
  if(isset($_POST['btn-edit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $reg = mysqli_real_escape_string($conn, $_POST['reg']);
    $pro = mysqli_real_escape_string($conn, $_POST['pro']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $pos = mysqli_real_escape_string($conn, $_POST['pos']);
    $pa = mysqli_real_escape_string($conn, $_POST['pa']);

    $query = "UPDATE official_tbl SET name='$name', age='$age', region='$reg', province='$pro', city='$city', position='$pos', party='$pa' WHERE id={$id}";
    if (mysqli_query($conn, $query)) {
      $_SESSION['prompt'] = array(
        'message' => 'Information successfully updated!', 
        'isError' => false
      );
      header('Location: '.ROOT_URL.'');
    }else{
      echo 'Error: '.mysqli_error($conn);
    }
  }

  $query = "SELECT * FROM official_tbl WHERE id=$id";
  $result = mysqli_query($conn, $query);
  $official = mysqli_fetch_assoc($result);

  mysqli_free_result($result);
  mysqli_close($conn);
?>
<?php require('inc/header.php') ?>

<h1 class="page-header">
  <span class="glyphicon glyphicon-pencil"></span> Edit Official
  <a href="index.php" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
  <div class="clearfix"></div>
</h1>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" class="form-control" name="name" placeholder="Name" required value="<?php echo $official['name']; ?>">
  </div>
  <div class="form-group">
    <label>Age:</label>
    <input type="text" class="form-control" name="age" placeholder="Age" required value="<?php echo $official['age']; ?>">
  </div>
  <div class="form-group">
    <label>Region:</label>
    <input type="text" class="form-control" name="reg" placeholder="Region" required value="<?php echo $official['region']; ?>">
  </div>
  <div class="form-group">
    <label>Province:</label>
    <input type="text" class="form-control" name="pro" placeholder="Province" required value="<?php echo $official['province']; ?>">
  </div>
  <div class="form-group">
    <label>City/Municipality:</label>
    <input type="text" class="form-control" name="city" placeholder="City/Municipality" required value="<?php echo $official['city']; ?>">
  </div>
  <div class="form-group">
    <label>Position:</label>
    <input type="text" class="form-control" name="pos" placeholder="Position" required value="<?php echo $official['position']; ?>">
  </div>
  <div class="form-group">
    <label>Party Affiliation:</label>
    <input type="text" class="form-control" name="pa" placeholder="Party Affiliation" required value="<?php echo $official['party']; ?>">
  </div>
  <button name="btn-edit" type="submit" class="btn btn-warning pull-right">Edit <span class="glyphicon glyphicon-pencil"></span></button>
  <div class="clearfix"></div>
</form>

<?php require('inc/footer.php') ?>