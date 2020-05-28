
<?php 
    session_start();
    
    if(!isset($_POST['secure']))
    {
        $_SESSION['secure'] = rand(1000, 9999);
    }
    else
    {
        if($_SESSION['secure'] == $_POST['secure'])
        {
            echo "match";
        }
        else
        {
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
    <img src="generate.php" />
    <form action="index.php" method="POST">
        type the value you see: <input type="text" name="secure" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>
