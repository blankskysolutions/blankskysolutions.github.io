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
    <h2 class="font-weight-bold">Recent News Letters</h2>
  </div>
  <div class="col-md-2">
    <a href="add-news.php"><button class="btn border-danger bg-dark text-light">Add New Alert</button></a>
  </div>
<table class="table table-striped table-dark container-fluid overflow-hidden">
  <tr>
    <th>Sr# </th>
    <th>ID</th>
    <th>Date</th>
    <th>News</th>
    <th>Action</th>
  </tr>
  <?php
    $select = mysqli_query( $conn, "SELECT * FROM `news`" );
    if ($select) {

      if (mysqli_num_rows($select) > 0) {
        $i=1;
        while ( $record = mysqli_fetch_assoc( $select ) ) {  
          echo " 
          <tr>
          <td>".$i."</td>
          <td>".$record['id']."</td>
          <td>".$record['date']."</td>
          <td>".$record['news']."</td>
          <td> <a href='delete-news.php?id=".$record['id'].".'class='text-success'> Delete </a></td>

          </tr>
          ";
          $i++;
          
        }
      }
      else{
        echo "
          <tr>
          <td>No News in your record!</td>
          </tr>
          ";
      }
    }

    ?>
  </table>
</div>
<?php include'footer.php' ?>