<?php include 'connection.php'?>
<?php
session_start();
if ( !isset($_SESSION['teacher'])) {
    header("Location:teacher-login.php");
}
?>
<?php include 'admin-header.php'?>
<div class="container-fluid" style="height: 100vh;"> 
  <div class="container-fluid text-center pt-4 d-flex row">
  <div class="col-md-12">
    <h2 class="font-weight-bold">All Leaves</h2>
  </div>
</div>
<div class="overflow-scroll bg-dark text-light mb-5">
  <table class="table table-striped table-dark container-fluid overflow-hidden">
    <tr>
      <th>Name</th>
      <th>Class</th>
      <th>Roll Number</th>
      <th>From</th>
      <th>To</th>
      <th>On</th>
      <th>Action</th>
    </tr>
  <?php 
    $class= $_SESSION['teacher']['class'];
    $student = mysqli_query( $conn, "SELECT teacher_login.*,leaves.* FROM teacher_login INNER JOIN  leaves on teacher_login.class = leaves.class WHERE $class=leaves.class" );
    if ($student) {

      if (mysqli_num_rows($student) > 0) {
        $i=1;
        while ( $_SESSION = mysqli_fetch_assoc( $student ) ) {  
          echo "
          <tr>
            <td>".$_SESSION['name']."</td>
            <td>".$_SESSION['class']."(".$_SESSION['section'].")</td>
            <td>".$_SESSION['roll']."</td>
            <td>".$_SESSION['leave_from']."</td>
            <td>".$_SESSION['leave_to']."</td>
            <td>".$_SESSION['time_stamp']."</td>
            <td><a class='text-white' href='delete-leave.php?id=".$_SESSION['roll']."'> Delete </a></td>
          </tr>
          ";
        }
      }
      else{
        echo "
          <ul class='p-4'>
            <li><b>No Leaves found in record!</b></li>
          </ul>
          ";
      }
    }
  ?>
  </table>
</div>
</div>
<?php   include'footer.php' ?>