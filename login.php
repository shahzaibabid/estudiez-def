<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiez-Login</title>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
</head>
<body>
<div class="main">    
    <!-- Sign in  Form starts -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signup-image.jpg" alt="sign up image"></figure>
                        <a href="register.php" class="signup-image-link">No account? Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login Hereyyy</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="your_name" id="your_name" placeholder="Your Email" autocomplete="off" required />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"  required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>    
                    </div>
                </div>
            </div>
        </section>
    <!-- Sign in Form ends  -->
</div>
</body>
</html>