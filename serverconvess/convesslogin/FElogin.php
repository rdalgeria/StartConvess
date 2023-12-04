<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
</head>
<body>
    <center><a href="C:\Users\QCU\Desktop\CONVESS\MAINPAGE\MAINPAGE.HTML">
        <?php echo ' <img class="img1" src="http://localhost/serverconvess/logo.png" 
        style="margin-top: 5px; margin-right:30px; width:200px;"> '; ?></a></center>
    
    <div class="wrapper">
        <form action="BElogin.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" id="username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            
            <div class="input-box">
                <input type="password" placeholder="Password" id="password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot Password</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="http://localhost/serverconvess/tryphpconvessregform/regform.php"> Register</a></p>
            </div>
        </form>
    </div>
    
    <br>
    <div class="bottom">
        <div class ="navbutton">
            <?php echo ' <img src="http://localhost/serverconvess/light.png" width="60px" style="margin-right: 50px;"> '; ?>
            <p>Give us your valuable <a href="C:\Users\QCU\Desktop\CONVESS\Feedback\CONVESS\index.html">feedback/suggestion here!</a></p>
            <center><a href="C:\Users\QCU\Desktop\CONVESS\MAINPAGE\MAINPAGE.HTML"><button
                style="background-color: #836853; color: rgb(255, 255, 213); width: 100%;
                padding:10px; border-radius: 20px; border: #443425 3px solid;"><strong> Back to Main </strong></button></a></center><div><pre>   </pre></div>
            <center><a href="C:\Users\QCU\Desktop\CONVESS\HELPSHERWIN\Illustrations\HELPCENTER\HelpCenter.html"><button
                style="background-color: #836853; color: beige; width: 100%;
                padding:10px; border-radius: 20px; border:  #443425 3px solid;"><strong> Help </strong></button></a></center><br><div><pre>   </pre> </div>
            <br><br></div></div>

</body>
</html>
