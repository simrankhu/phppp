<?php  
include("conn.php");
?>
<!doctype html>
<html lang="en">
<head>
    <title>login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="email">
            </div>
            <div class="mb-3 d-flex">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <span><a href="reset_password.php">forgot password ?</a></span>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = trim($_POST['password']);
     
    $sql = "SELECT * FROM `reset` WHERE `email`='$email'";
    $result = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $hash = $row['password'];
            if(password_verify($password, $hash)){
                echo "Login successfully";
            } else {
                echo "Invalid password";
            }
        }
    } else {
        echo "User not found";
    }
}
?>
