<html>
<head>
    <title>Add Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
 
<body>
    <a href="index.php" class="link-dark">Go To Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-3">
                <input type="text" name="name" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-3">
                <input type="text" name="email" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Mobile</label>
            <div class="col-sm-3">
                <input type="number" name="mobile" class="form-control">
            </div>
        </div>
            
        <div class="col-sm-5 text-center">        
            <input type="submit" name="Submit" value="Add" class="btn btn-dark">
        </div>    

    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>