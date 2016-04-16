
<?php
//require_once("../includes/config.php");
  $result = query("SELECT * FROM global_library ");

?>
  <!--  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
 -->
 <link rel="stylesheet" type="text/css" href="../dataTables/datatable.css">



<div class="col-md-12" style="margin-top: 5%">
<div class="panel panel-default" style="border-top:2px solid red;">
                            <div class="panel-heading">
                                <h4>Library Search </h4>
                            </div>
 <div class="panel-body">
  <table id="example" class="table table-hover table table-responsive">
    <thead>
      <tr>
      <th>ISBN</th>
      <th>Book Name</th>
      <th>Writer Name</th>
      <th>Publisher</th>
      <th>Availablity</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($result as $row) {
     
   
      ?>
      <tr>
        <td><?=$row['ISBN']?></td>
        <td><?=$row['book_name']?></td>
        <td><?=$row['writer']?></td>
        <td><?=$row['Publisher']?></td>
        <td><?=$row['available']?></td>


      </tr>
   <?php }
    ?>
      
      </tbody>
    </table>
   </div>
   </div>
   </div>
  <!-- <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  -->
<script type="text/javascript" src="../dataTables/jquery.dataTables.min.js"></script>
  <script>

  $(function(){
    $("#example").dataTable();
  })
  </script>
</body>
</html>