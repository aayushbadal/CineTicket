<?php
    require_once"includes/header.php";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // Get form data
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $confirm_password = trim($_POST['confirm_password']);
        $full_name = trim($_POST['full_name']);

        //validate input
        if(empty($username) || empty($email) || empty($password) || empty($confirm_password) || empty($full_name)){
            $errormessage = "Please fill in all required fields";
        }
        else if(strlen($username)<3){
            $errormessage="Username must be at least  3 characetr long";
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errormessage+"Please enter the valid email address";
        }
        else if(strlen($password)<6){
            $errormessage="Password must be at least 6 character long";
        }
        else if($password != $confirm_password){
            $errormessage="passwords donot match";
        }   
        else{
            //perform registration work
        }
    }
?>

<section class="form-section">
    <div class="container">
        <?php if(!empty($errormessage)):?>
            <div class="error-message">
                <?=$errormessage ?>
            </div>
            <?php endif; ?>
        <div class="form-container">
            <h2 class="form-title">Create an Account</h2>
            <form action="/register.php" method="POST" id="register-form">
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" name="full_name" required/>
                </div>

                <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="email" name="email" id=""/>
                </div>

                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" id=""/>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id=""/>
                </div>

                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm_password" id=""/>
                </div>

                <button type="submit" class="form-btn">Register</button>

                <div class="form-footer">
                    <p>
                        Already have account ? <a href="/login.php">Login</a>
                    </p>
                </div>

                
            </form>
        </div>
    </div>
</section>


<?php
    require_once"includes/footer.php";
?>