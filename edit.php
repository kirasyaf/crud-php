<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <a href="index.php" class="link-dark">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-3">
                <input type="text" name="name" class="form-control" value=<?php echo $name;?>>
            </div>
        </div>    

        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-3">
                <input type="text" name="email" class="form-control" value=<?php echo $email;?>>
            </div>
        </div>

        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Mobile</label>
            <div class="col-sm-3">
                <input type="text" name="mobile" class="form-control" value=<?php echo $mobile;?>>
            </div>
        </div> 
            
         
        <div class="col-sm-5 text-center">        
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <input type="submit" name="update" value="Update" class="btn btn-dark">
        </div>    

            
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</body>
</html>