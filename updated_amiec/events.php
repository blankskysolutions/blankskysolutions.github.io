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
        <li class='pl-3' role='menuitem' tabindex='-1'><a href='inquiries.php'>Inquiries</a></li>
        <li class='pl-3' role='menuitem' tabindex='-1'><a href='news.php'>News</a></li>
        <li class='pl-3' role='menuitem' tabindex='-1'><a href='events.php'>Events</a></li>
        <li class='pl-3' role='menuitem' tabindex='-1'><a href='staff.php'>Staff</a></li>
        <li class='pl-3' role='presentation'><a role='menuitem' tabindex='-1' href='logout.php'>Logout</a></li>
        ";
        ?>
       </ul>
        </div>
  </div>

    <div class="container-fluid text-center pt-4 d-flex row">
    <div class="col-md-6">
      <h2 class="font-weight-bold">All Events</h2>
    </div>
    <div class="col-md-2">
      <a href="add-event.php"><button class="btn border-danger bg-dark text-light">Add New Event</button></a>
    </div>
  </div>
  <table class="table table-striped table-dark container-fluid overflow-hidden">
    <tr>
      <th>Sr# </th>
      <th>ID</th>
      <th>Date</th>
      <th>Event</th>
      <th>Action</th>
    </tr>
  <?php
    $select_event = mysqli_query( $conn, "SELECT * FROM events");
    if ($select_event) {

      if (mysqli_num_rows($select_event) > 0) {
        $i=1;
        while ( $record_event = mysqli_fetch_assoc( $select_event ) ) {  
          echo " 
          <tr>
          <td>".$i."</td>
          <td>".$record_event['id']."</td>
          <td>".$record_event['name']."</td>
          <td>".$record_event['date']."</td>
          <td> <a href='delete-event.php?id=".$record_event['id'].".'class='text-success'> Delete </a></td>

          </tr>
          ";
          $i++;
          
        }
      }
    }

    ?>
  </table>