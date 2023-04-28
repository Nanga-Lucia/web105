<?php include('./db_function.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Employer Registration Form</title>
</head>
<body>
<!-- <form action="" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="firstName" placeholder="First Name..." name="firstName">
                    <label for="firstName">First Name</label>
                    <div class="error"><?php //echo $fnameErr; ?></div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name..." name="lastName">
                    <label for="lastName">Last Name</label>
                    <div class="error"><?php //echo $lnameErr; ?></div>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com...">
                    <label for="floatingInput">Email address</label>
                    <div class="error"><?php //echo $emailErr; ?></div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" name="password" placeholder="Password...">
                    <label for="floatingPassword">Password</label>
                    <div class="error"><?php //echo $passwordErr; ?></div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" name="rpassword" placeholder="Repeat Password...">
                    <label for="floatingPassword">Confirm Password</label>
                    <div class="error"><?php //echo $rpassword; ?></div>
                </div><br><br>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form> -->

<!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Register as employer
    </button>

  
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Register as Employer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="firstName" placeholder="First Name..." name="firstName" required autofocus>
                    <label for="firstName">First Name</label>
                    <div class="error"><?php echo $fnameErr; ?></div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name..." name="lastName" required>
                    <label for="lastName">Last Name</label>
                    <div class="error"><?php echo $lnameErr; ?></div>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com..." required>
                    <label for="floatingInput">Email address</label>
                    <div class="error"><?php echo $emailErr; ?></div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" name="password" placeholder="Password..."required>
                    <label for="floatingPassword">Password</label>
                    <div class="error"><?php echo $passwordErr; ?></div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" name="rpassword" placeholder="Repeat Password..." required>
                    <label for="floatingPassword">Confirm Password</label>
                    <div class="error"><?php echo $rpassword; ?></div>
                </div><br><br>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button> 
        </div>
        </div>
    </div>
    </div>
 

</body>
</html>
<!-- 
if($stmt = $conn->prepare('SELECT * FROM employer_db WHERE email=?')){
            $stmt->bind_param('s', $_POST['email']);
            $stmt->execute();
            $stmt->store_result();
    
            if($stmt->num_rows>0){
                echo '<h3 class = "text-danger">Username already exist. Try again!</h3>';
            }else{
                if($stmt = $conn->prepare('INSERT INTO employer_db (first_name, last_name, email, password_hash) VALUES (?,?,?,?)')){
                   $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
           
                    $stmt->bind_param('ssss', $_POST['firstName'], $_POST['lastName'], $_POST['email'], $password_hash );
                    $stmt->execute();
                    echo '<h2 class = "text-success">Successful Registration</h2>';
                }else{
                    echo 'Error occured';
                }
            }
            $stmt->close();
    }else{
        echo 'Erro occured';
    } -->