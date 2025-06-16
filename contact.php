<?php

include 'connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};


if(isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already!';
    }else{
        mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'index5.html'; ?>

 <!-- product section start--> 
  <section class="contact" id="contact">
  <section class="contact">
  <section class="about" id="about">
    <h1 class="heading"><span>Contact </span>us</h1>


   
</section>

<section class="contact">
    <div class="row">
  <form action="" method="POST">
        
        <input type="text" name="name" placeholder="enter your name" required maxlength="20" class="card"> 
        <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="card" >
        <input type="number" name="number" placeholder="enter your number" class="card" >
        <textarea name="message" class="card" placeholder="enter your message" required cols="30" rows="10"></textarea>
        <input type="submit" value="send message" name="send" class="btn">
    </form>

    <div class="image">
        <img src="contact_img.jpeg">
    </div>

    </div>

  

</section>






<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>