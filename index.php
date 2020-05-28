
<?php 
    session_start();
    
    if(!isset($_POST['secure']))
    {
        // generate captcha text and store on session
        $_SESSION['secure'] = rand(1000, 9999);
    }
    else
    {
        if($_SESSION['secure'] == $_POST['secure'])
        {
            echo "captcha match";
        }
        else
        {
            // if captcha incorrect than generate another captcha text and store on session
            echo "incorrect captcha";
            $_SESSION['secure'] = rand(1000, 9999);
        }
    }
    
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <!-- Display captcha image from session stored value-->
    <img src="generate.php" />
    <form action="index.php" method="POST">
        type the value you see: <input type="text" name="secure" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>
