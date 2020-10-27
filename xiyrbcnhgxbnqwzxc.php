<a download href="form.pdf" id="downl"></a>
<?php
    include "db_config.php";
    if(isset($_GET['pay'])){
    session_start();
    $status = 'PAID';
    $email = $_SESSION['paye-email'];
    $query = $conn->prepare("UPDATE admission_avi SET payment_status=? WHERE email=? ");
    $query->bind_param("ss",$status,$email);
    $query->execute();
    $query->close();
?>
<script>
    downld();
    function downld(){
        document.getElementById('downl').click();
        location.href='admission';
    }
    </script>
    <?php 
    }else{
        echo "Sorry, you are not supposed to be here!";
    }
    ?>