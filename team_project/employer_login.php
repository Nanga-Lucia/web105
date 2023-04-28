<?php
    //include 'validate.php'; 
    include 'database.php';
    $is_invalid = false;
        if($_SERVER['REQUEST_METHOD'] === "POST"){

            //$conn = require __DIR__. "/database.php";

            $sql = sprintf("SELECT * FROM employer_db WHERE email = '%s'",$conn->real_escape_string($_POST['email']));

            $result = $conn->query($sql);
            $user = $result->fetch_assoc();
            
            if($user){
            if(password_verify($_POST['password'], $user['password_hash'])){
                
                session_start();
                session_regenerate_id();
                $_SESSION['user_id'] = $user['id'];

                header("Location: index.html");
                exit;
            }
            }

            $is_invalid = true;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Employer login Form</title>
</head>
<body>
    <div class="container-fluid wrapper my-5">
        <div class="container hero mt-5">
            <h1>Login form</h1>
            <?php if($is_invalid): ?>
                <em>Invalid login</em>
            <?php endif; ?>
            <form action="" method="post" class="p-4">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" name="email" placeholder="enter email" class="form-control" value="<?= htmlspecialchars($_POST['email']?? "") ?>" autofocus>
                    <label for="email">Enter e-mail</label>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="password" name="password" id="pwd" placeholder="Enter password" class="form-control" required>
                    <label for="pwd">Enter password</label>
                </div>
                <input type="checkbox" class="form-check-input" id="mycheck" name="remember" checked>
                <label for="mycheck" class="form-check-label">Remember me</label><br>
                <input type="submit" value="login" class="btn btn-primary">
            </form>
            <!-- <a href="forgotpassword.html">forgot password?</a>
            <p>don't have an account?</p> -->
        </div>
    </div>
</body>
</html>