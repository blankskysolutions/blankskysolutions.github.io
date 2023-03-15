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
        <li class='text-center' role='presentation'><a class='text-success' role='menuitem' tabindex='-1' href='logout.php'>Logout</a></li>
        ";
        ?>
       </ul>
        </div>
  </div>


<div class="container-fluid text-center pt-4 d-flex row m-auto">
  <div class="col-md-12">
    <h2 class="font-weight-bold">Inquiries</h2>
  </div>
<table class="table table-striped table-dark container-fluid overflow-hidden">
  <tr>
    <th>Sr# </th>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Query</th>
    <th>Phone</th>
    <th>Action</th>
  </tr>
  <?php
    $select = mysqli_query( $conn, "SELECT * FROM inquiry WHERE date(time)=CURDATE()");
    if ($select) {

      if (mysqli_num_rows($select) > 0) {
        $i=1;
        while ( $record = mysqli_fetch_assoc( $select ) ) {  
          echo " 
          <tr>
          <td>".$i."</td>
          <td>".$record['id']."</td>
          <td>".$record['std_name']."</td>
          <td>".$record['email']."</td>
          <td>".$record['address']."</td>
          <td>".$record['query']."</td>
          <td><a class='text-white' href=".'tel:+92'.$record['phone'].">".$record['phone']."</a></td>
          <td> <a href='delete-inquiry.php?id=".$record['id'].".'class='text-success'> Delete </a></td>
          </tr>
          ";
          $i++;
        
        }
      }
      else{
        echo "
          <tr>
          <td>No Query Found today!</td>
          </tr>
          ";
      }
    }

    ?>
  </table>
</div>
<?php include'footer.php' ?>