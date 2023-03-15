    <?php include 'connection.php'?>
    <?php
    session_start();
    if ( !isset($_SESSION['user']) ) {
        header("Location:login.php");
    }
    ?>
    <?php include 'admin-header.php'?>
      <div class="container-fluid">
          <div class='dropdown' style="cursor: pointer;">
          <img src="imgs/profile.png" class=" dropdown-toggle bg-transparent float-right" style="width: 3%;" data-toggle="dropdown"/>
          <ul class="dropdown-menu" style="width: 15%;" role="menu" aria-labelledby="menu1">
            <?php 
              $admin = mysqli_query( $conn, "SELECT * FROM login" );
              $SESSION = mysqli_fetch_assoc( $admin );
              echo "
            
            <li class='pl-3' role='menuitem' tabindex='-1'>".$SESSION['name']."</li>
            <li class='pl-3 pt-2' role='menuitem' tabindex='-1' >".$SESSION['email']."</li>
            <li role='presentation' class='divider'><hr class='w-100'></li>
            <li class='pl-3' role='menuitem' tabindex='-1'><a class='text-dark' href='inquiries.php'>Inquiries</a></li>
            <li class='pl-3' role='menuitem' tabindex='-1'><a class='text-dark' href='news.php'>News</a></li>
            <li class='pl-3' role='menuitem' tabindex='-1'><a class='text-dark' href='events.php'>Events</a></li>
            <li class='pl-3' role='menuitem' tabindex='-1'><a class='text-dark' href='staff.php'>Staff</a></li>
            <li class='text-center' role='presentation'><a class='text-dark' role='menuitem' tabindex='-1' href='logout.php'>Logout</a></li>
            ";
            ?>
           </ul>
            </div>
      </div>
<div class="container-fluid"> 
  <div class="container-fluid text-center pt-5 d-flex row">
  <div class="col-md-7 text-left">
    <h2 class="font-weight-bold">Leaves</h2>
  </div>
  <div class="col-md-5">
    <a href="all-leaves.php"><button class="btn border-danger bg-dark text-light float-right">View All Leaves</button></a>
  </div>
</div>
<div class="container-fluid bg-dark text-light">
  <?php 
    $std_leaves = mysqli_query( $conn, "SELECT * FROM leaves WHERE date(time_stamp)=CURDATE()" );
    if ($std_leaves) {

      if (mysqli_num_rows($std_leaves) > 0) {
        $i=1;
        while ( $_SESSION = mysqli_fetch_assoc( $std_leaves ) ) {  
          echo "
          <ul class='p-4'>
            <li><b>".$_SESSION['name']."</b> (Roll No. " .$_SESSION['roll']. ") of Class <b>".$_SESSION['class']."(".$_SESSION['section'].")</b> applied for leave for <b>".$_SESSION['days']."</b> days from <b>".$_SESSION['leave_from']."</b> to <b>".$_SESSION['leave_to']."</b> on <b>".$_SESSION['time_stamp']."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='delete-leave.php?id=".$_SESSION['roll'].".'class='text-success'>Delete</a></li>
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