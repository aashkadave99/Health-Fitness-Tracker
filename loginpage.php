<html>
<style>
    <?php include 'css/styleforms.css';?>
</style>
    <title>Healthify-Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Recursive&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4cf62cb5b0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/stylesforms.css">
    <script src="https://kit.fontawesome.com/4cf62cb5b0.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="main-header"> 
            <div class="title-header">
                <h1 class="title-heading"><i class="fas fa-heartbeat"></i>  name TBD</h1>
            </div>
            <div class="nav-header">
                <nav class="nav-items">
                    <ul>
                        <li><a href="register-here.html" target="_blank">Blog</a></li>
                        <li><a href="homepage.html#about-us">About Us</a></li>
                        <li><a href="homepage.html#get-in-touch">Get in touch</a></li>
                    </ul>  
                </nav>
            </div>
        </div>
    </header>

        <div class="box">
            <div class="form">
                <header class="form-header">
                    <h3 class="form-heading">Login</h3>
                </header>
                
                <form action="http://localhost/Health-Fitness-Tracker/loginpage.php" method="POST">
                    <label for="uname">Enter Username</label><br>
                    <input type="text" id="uname" name ="uname" required autofocus><br>
                    <label for="pswd">Enter Password</label><br>
                    <input type="password" id="pswd" name ="pswd" required><br>  
                    <input type="checkbox" name="remember-me" id="remember-me">Remember Me <br>
                    <input type="submit" name="login" id="login-btn" value="LOGIN">
                </form> 
            </div>
        </div>
        
        <?php
        $un = 'abc';
        $p = 'pass';
        
        if(isset($_POST['login'])){
            
            $uname = $_POST['uname'];
            $pswd = $_POST['pswd'];

            if($uname!=$un or $pswd!=$p){?>
                <script>
                    alert('Incorrect username or password'); 
                </script>
            <?php    
            }
        }
?>
</body>
</html>

