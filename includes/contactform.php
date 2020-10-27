  <?php 

  include "../db_config.php";

    if(isset($_POST['submit'])){

          $email_avi    = $_POST['email'];
          $message_avi  = $_POST['message'];


    
    $query = "INSERT INTO contact_avi(email, message)" ;   
    $query .= " VALUES( '{$email_avi}', '{$message_avi}')";

    $insert_query = mysqli_query($conn, $query);


    }

    ?>