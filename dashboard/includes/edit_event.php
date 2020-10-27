<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Event Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Event </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->


         <?php 
                  if(isset($_GET['p_id'])){

                        $post_id = $_GET['p_id'];
                  }

                  $query = "SELECT * FROM event_avi WHERE id = $post_id";
                  $select_edit_event = mysqli_query($conn, $query);

                  while($row = mysqli_fetch_assoc($select_edit_event )){

                            $id = $row['id'];
                            $title = $row['title'];
                            $details = $row['content'];
                            $image = $row['image'];
                            $date = $row['dates'];

                      }



           ?>                 

              <?php 

              if(isset($_POST['update'])){

                $title = $_POST['title'];
                $date = $_POST['date'];
                $image = $_FILES['image']['name'];
                $image_temp = $_FILES['image']['tmp_name'];
                $details = $_POST['details'];

                move_uploaded_file($image_temp, "../images/$image");

                if(empty($image)) {

                  $query = "SELECT * FROM event_avi WHERE id = $post_id";
                  $select_image = mysqli_query($conn, $query);

                  while($row = mysqli_fetch_array($select_image)){
                         $image = $row['image'];
                  }
                }


               $query = "UPDATE event_avi SET ";
               $query .= "title = '{$title}', ";
               $query .= "content = '{$details}', ";
               $query .= "image = '{$image}', ";
               $query .= "dates = '{$date}' ";

               $query .= "WHERE id = {$post_id}";


              $update_query = mysqli_query($conn, $query);

              if(!$update_query){

                die('QUERY FAILED' . mysqli_error($conn));
              } else {

                echo "<script> alert('Event Successfully Updated')</script>";
              }




              }



              ?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Event</h3>
              </div>
              <!-- /.card-header -->


              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input value="<?php echo $title; ?>" type="text" class="form-control" id="" placeholder="Enter event title" name="title">
                  </div>
                  <div class="form-group">
                    <label for="date">Date</label>
                    <input value="<?php echo $date; ?>" type="text" class="form-control" id="" placeholder="13th December 2020" name="date">
                  </div>
                  <div class="form-group">
                  <label>Image</label><br>
                  <img  width="150" height="100" src="../images/<?php echo $image; ?>"><br><br>
                  <input type="file" name="image">
                  </div>
                      <div class="form-group">
                        <label>Event Details</label>
                        <textarea class="form-control" rows="5" placeholder="Enter event details" name="details"><?php echo $details; ?></textarea>
                      </div>
                    </div>

                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
           
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="./plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>



<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="./plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="./plugins/jszip/jszip.min.js"></script>
<script src="./plugins/pdfmake/pdfmake.min.js"></script>
<script src="./plugins/pdfmake/vfs_fonts.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>