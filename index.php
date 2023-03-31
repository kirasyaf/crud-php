<?php
// Membuat halaman Connect dengan config file / database
  include_once ("config.php");

// mengambil data users dari database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>

<head>
  <tittle>Home page</tittle>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<a href="add.php" class="link-dark">Menambah User</a>
<br> <br> 

<table class="table table-striped table-hover table-bordered border-dark">

  <tr>
    <th class="table-dark">Name</th>
    <th class="table-dark">Mobile</th>
    <th class="table-dark">Email</th>
    <th class="table-dark">Update</th>
  </tr>
  <?php
  while($user_data = mysqli_fetch_array($result))
    {
       echo "<tr>";
       echo "<td>".$user_data ['name']."</td>";
       echo "<td>".$user_data ['mobile']."</td>";
       echo "<td>".$user_data ['email']."</td>";
       echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td>";
       echo "</tr>";
    }

  ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>