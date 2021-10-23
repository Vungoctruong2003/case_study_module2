
<?php
include_once "app/Controllers/adminController.php";
include_once "app/Models/adminModel.php";
include_once "app/Models/DBConnect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = [];
    $user["user_account"] = $_POST['account'];
    $user['user_password'] = $_POST['psw'];
    $user['user_name'] = $_POST['name'];
    $user['user_email'] = $_POST['email'];
    $user['user_phone'] = $_POST['phone'];
    $user['user_address'] = $_POST['address'];
    $user['user_role'] = 1;
    $adminController = new adminController();
    $adminController->addUser($user);
}
include_once "SignUp.php";
?>
<!DOCTYPE html>
<html>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for all buttons */
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity:1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
        float: left;
        width: 50%;
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
            width: 100%;
        }
    }
</style>
<body>

<form action="" style="border:1px solid #ccc" method="post">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="phone"><b>Phone</b></label>
        <input type="text" placeholder="Enter Phone" name="phone" required>

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="address" required>

        <label for="account_name"><b>Account Name</b></label>
        <input type="text" placeholder="Enter Account Name" name="account" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <div class="clearfix">
            <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
            <a href="SignUp.php"> <button type="submit" class="signupbtn">Sign Up</button></a>
        </div>
    </div>
</form>
</body>
</html>

