<?php require (__DIR__. "/includes/classes.php");
?>
<html>
    <head>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     
    </head>
    <body>
    <table class="table">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">State Id</th>
    </tr>
  </thead>
  <tbody>
  <?php
  if(isset($_GET['action'])){
    if($_GET['action']=="update"){
        $value = $_GET['value'];
        $obj->update($_GET['id'],$value);
    }
    if($_GET['action']=="del"){
        $obj->deletethat($_GET['id']);
    }
    if($_GET['action']=="insert"){
        $obj->insert("test");
    }
}
  
  $allcities = $obj->viewall();
        foreach($allcities as $worldcities){
            $id = $worldcities['id'];
            $name = $worldcities['name'];
            $state_id = $worldcities['state_id'];
            // $worldcities->name = "test";
            // $worldcities->save();
            
    ?>
    <tr>
      
      <td><?php echo $id;?></td>
      <td><?php echo $name;?></td>
      <td><?php echo $state_id;?>
      <br>
      <a href="?action=update&id=<?php echo $id.'&value='?>">Update</a>
      <a href="?action=del&id=<?php echo $id.'&value='?>">Delete</a>
      
      </td>

    </tr>
        <?php } ?>
  </tbody>
</table>
    </body>
<script>
    $(document).ready(function() {
        $('.table').DataTable();
    } );
</script>
</html>