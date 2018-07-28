<?php

  // connecting to the database
  include_once '../DATABASE/DB_CONNECTION_ENABLE.php';

  session_start();
  $name = $_SESSION['NAME'];
  $username = $_SESSION['USER_NAME'];
  $email = $_SESSION['EMAIL'];

  if( isset($_POST['logout'])  ) {
    session_unset();
    session_destroy();
    sleep(1);
    header('Location: ../index.html');
  }

  if( isset( $_POST['saree'] ) ) {
    $saree_query = "SELECT * FROM products WHERE PR_NAME='Mirnalika Saree'";
    $saree_query_result = mysqli_query( $connect , $saree_query );

    $saree_row = mysqli_fetch_assoc($saree_query_result);

    $prname = $saree_row['PR_NAME'];
    $old_price =  $saree_row['PR_OLD_PRICE'];
    $new_price =  $saree_row['PR_NEW_PRICE'];
    $randno = randomNumber(4);

    $insert_data_query = "INSERT INTO orders_table( NAME , EMAIL , PRODUCT_NAME , PRODUCT_PRICE , RANDOM_NO ) VALUES('$name' , '$email' , '$prname' , $new_price , '$randno')";
    $insert_data_query_result = mysqli_query($connect , $insert_data_query);

    $_SESSION['prname'] = $prname;
    $_SESSION['user-name'] = $name;
    $_SESSION['price'] = $new_price;

    //for mail sending
    $headers = "MIME-VERSION:1.0."."\r\n";
    $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
    $semail = $email;
    $subject = "ShopIt order has been placed";
    $message = "Your order for" . $prname . "has been successfully placed" . "and your OTP number is " . $randno . "Kindly show the number when delivery of product.";

    mail( $semail , $subject , $message , $headers );

    sleep(1);
    header('Location: order.php');
  }

  if( isset( $_POST['trouser'] ) ) {
    $trouser_query = "SELECT * FROM products WHERE PR_NAME='Levis Trouser'";
    $trouser_query_result = mysqli_query( $connect , $trouser_query );

    $trouser_row = mysqli_fetch_assoc($trouser_query_result);

    $prname = $trouser_row['PR_NAME'];
    $old_price =  $trouser_row['PR_OLD_PRICE'];
    $new_price =  $trouser_row['PR_NEW_PRICE'];
    $randno = randomNumber(4);

    $insert_data_query = "INSERT INTO orders_table( NAME , EMAIL , PRODUCT_NAME , PRODUCT_PRICE , RANDOM_NO ) VALUES('$name' , '$email' , '$prname' , $new_price , '$randno')";
    $insert_data_query_result = mysqli_query($connect , $insert_data_query);

    $_SESSION['prname'] = $prname;
    $_SESSION['user-name'] = $name;
    $_SESSION['price'] = $new_price;

    //for mail sending
    $headers = "MIME-VERSION:1.0."."\r\n";
    $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
    $semail = $email;
    $subject = "ShopIt order has been placed";
    $message = "Your order for" . $prname . "has been successfully placed" . "and your OTP number is " . $randno . "Kindly show the number when delivery of product.";

    mail( $semail , $subject , $message , $headers );

    sleep(1);
    header('Location: order.php');
  }

  if( isset( $_POST['frock'] ) ) {
    $frock_query = "SELECT * FROM products WHERE PR_NAME='kid frock'";
    $frock_query_result = mysqli_query( $connect , $frock_query );

    $frock_row = mysqli_fetch_assoc($frock_query_result);

    $prname = $frock_row['PR_NAME'];
    $old_price =  $frock_row['PR_OLD_PRICE'];
    $new_price =  $frock_row['PR_NEW_PRICE'];
    $randno = randomNumber(4);

    $insert_data_query = "INSERT INTO orders_table( NAME , EMAIL , PRODUCT_NAME , PRODUCT_PRICE , RANDOM_NO ) VALUES('$name' , '$email' , '$prname' , $new_price , '$randno')";
    $insert_data_query_result = mysqli_query($connect , $insert_data_query);

    $_SESSION['prname'] = $prname;
    $_SESSION['user-name'] = $name;
    $_SESSION['price'] = $new_price;

    //for mail sending
    $headers = "MIME-VERSION:1.0."."\r\n";
    $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
    $semail = $email;
    $subject = "ShopIt order has been placed";
    $message = "Your order for" . $prname . "has been successfully placed" . "and your OTP number is " . $randno . "Kindly show the number when delivery of product.";

    mail( $semail , $subject , $message , $headers );

    sleep(1);
    header('Location: order.php');
  }

  function randomNumber ($length){
    $result = '';
    for($i=0;$i<$length; $i++)
    {
      $result .=mt_rand(0,9);
        }
        return $result;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login System</title>
  <link rel="stylesheet" href="user-profile.css" type="text/css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lalezar" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
</head>
<body>

  <div id="header">
    <header>

      <div id='log-out'>
          <div class="username">
            Hey &nbsp;<?php echo $username; ?>
          </div>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
            <input type="submit" name="logout" value="Log Out" class="btn btn-success"/>
          </form>
      </div>
    </header>
  </div>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div class="products">
    <div class="product" >
        <img src="images/men-trousers.jpg" alt="Mens-trousers" style="height:260px; width:210px; " />
        <div class="name" >
          Levi's Trouser
        </div>
        <div class="price">
          <del>&#8377;3000 </del>&nbsp; &#8377;2000
        </div>

        <div class="order">
            <button name="trouser">Order</button>
        </div>

    </div>
    <div class="product">
        <img src="images/women-saree.jpg" alt="Women-saree" />
        <div class="name">
          Mirnalika saree
        </div>
        <div class="price">
          <del>&#8377;2500 </del>&nbsp; &#8377;1700
        </div>

        <div class="order">
            <button name="saree">Order</button>
        </div>
    
    </div>
    <div class="product">
        <img src="images/kid-dress.jpg" alt="Kids-dress" />
        <div class="name">
          Kid frock
        </div>

        <div class="price">
          <del>&#8377;1000 </del>&nbsp; &#8377;750
        </div>

        <div class="order">
            <button name="frock">Order</button>
        </div>

    </div>
  </div>
</form>
</body>
</html>


<?php
    // disconnecting from the database
    include '../DATABASE/DB_CONNECTION_DISABLE.php';
 ?>
