<?php
    session_start();

    $product = $_SESSION['prname'];
    $username = $_SESSION['user-name'];

    if( isset($_POST['goback']) ) {
        sleep(1);
        header('Location: user-profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success | order</title>
    <link rel="stylesheet" href="user-profile.css" />
</head>
<body>
    <div class="done">Done.......</div><br />
    <div class="content">
        Thank You <b> <?php echo $username; ?> </b>.
        Your order for <b> <?php echo $product; ?> </b>has been successfully placed....<br />
        <b>Check Your email for more details</b><br />
        Continue Your Purchases...

        <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="POST">
            <button type="submit" name="goback" class="gobackbtn">
                Go Back.
            </button>
        </form>
    </div>

</body>
</html>