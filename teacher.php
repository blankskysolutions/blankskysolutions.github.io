<?php include 'connection.php'?>
<?php
session_start();
if ( !isset($_SESSION['teacher']) ) {
    header("Location:teacher-login.php");
}
?>
<?php include 'admin-header.php'?>
<head>  
    <style> 
.profile:hover{
  width: 3.5% !important ;
}
    </style>
</head>     
<div class="container-fluid" style="height: 65px !important ;">
      <div class='dropdown' style="cursor: pointer;">
      <img src="imgs/profile.png" class=" dropdown-toggle bg-transparent float-right profile" style="width: 3%;" data-toggle="dropdown"/>
      <ul class="dropdown-menu" style="width: 15%;" role="menu" aria-labelledby="menu1">
        <?php 
          $teacher = mysqli_query( $conn, "SELECT * FROM teacher_login" );
          $SESSION = mysqli_fetch_assoc( $teacher );
          echo "
        
        <li class='pl-3' role='menuitem' tabindex='-1'>".$SESSION['name']."</li>
        <li class='pl-3 pt-2' role='menuitem' tabindex='-1' >".$SESSION['email']."</li>
        <li role='presentation' class='divider'><hr class='w-100'></li>
        <li class='pl-3 pb-3' role='presentation'><a role='menuitem' tabindex='-1' href='logout.php'>Logout</a></li>
        ";
        ?>
       </ul>
        </div>
  </div>
<div class="container-fluid"> 
  <div class="container-fluid text-center pt-4 d-flex row">
  <div class="col-md-12">
    <h2 class="font-weight-bold">Leaves</h2>
  </div>
</div>
<div class="container-fluid bg-dark text-light">
  <?php 
  $class= $_SESSION['teacher']['class'];
    $std_leaves = mysqli_query( $conn, "SELECT * FROM teacher_login INNER JOIN  leaves on teacher_login.class = leaves.class WHERE $class=leaves.class");
    if ($std_leaves) {

      if (mysqli_num_rows($std_leaves) > 0) {
        $i=1;
        while ( $_SESSION = mysqli_fetch_assoc( $std_leaves ) ) {  
          echo "
          <ul class='p-4'>
            <li><b>".$_SESSION['name']."</b> (Roll No. " .$_SESSION['roll']. ") of Class <b>".$_SESSION['class']."(".$_SESSION['section'].")</b> applied for leave for <b>".$_SESSION['days']."</b> days from <b>".$_SESSION['leave_from']."</b> to <b>".$_SESSION['leave_to']."</b> on <b>".$_SESSION['time_stamp']."</b></li>
          </ul>
          ";
        }
      }
      else{
        echo "
          <ul class='p-4'>
            <li><b>No Leave for today!</b></li>
          </ul>
          ";
      }
    }
  ?>
</div>
</div>
<?php include'footer.php' ?>