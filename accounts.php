<?php
session_start();
if (!isset($_SESSION['userId'])) {
  header('location:login.php');
}

// Fetch user data from session
$userData = isset($_SESSION['user']) ? $_SESSION['user'] : null;

if (!$userData) {
  echo "<div class='alert alert-danger text-center'>Error: User data not found. Please log in again.</div>";
  exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Banking</title>
  <?php require 'assets/autoloader.php'; ?>
  <?php require 'assets/db.php'; ?>
  <?php require 'assets/function.php'; ?>
</head>

<body style="background:#96D678;background-size: 100%">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">


    <a class="navbar-brand" href="#">
      <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      <?php echo bankName; ?>
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active "> <a class="nav-link" href="accounts.php">Accounts</a></li>
        <li class="nav-item "> <a class="nav-link" href="statements.php">Account Statements</a></li>
        <li class="nav-item "> <a class="nav-link" href="transfer.php">Funds Transfer</a></li>

      </ul>
      <?php include 'sideButton.php'; ?>

    </div>
  </nav><br><br><br>
  <div class="container">
    <div class="card  w-75 mx-auto">
      <div class="card-header text-center">
        Your account Information
      </div>
      <div class="card-body">
        <table class="table table-striped table-dark w-75 mx-auto">
          <thead>
            <tr>
              <td scope="col">Account No.</td>
              <th scope="col"><?php echo $userData['accountNo']; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Branch</th>
              <td><?php echo $userData['branchName']; ?></td>
            </tr>
            <tr>
              <th scope="row">Branch Code</th>
              <td><?php echo $userData['branchNo']; ?></td>
            </tr>
            <tr>
              <th scope="row">Account Type</th>
              <td><?php echo $userData['accountType']; ?></td>
            </tr>
            <tr>
              <th scope="row">Account Created</th>
              <td><?php echo $userData['date']; ?></td>
            </tr>
          </tbody>
        </table>

      </div>
      <div class="card-footer text-muted">
        <?php echo bankName ?>
      </div>
    </div>

  </div>
</body>

</html>