<!DOCTYPE html>

<?php 

include 'db.php';  

$page = (isset($_GET['page']) ? (int)$_GET['page'] : 1);

$perPage = (isset($_GET['perPage']) && (int)$_GET['perPage'] <= 50 ? (int)$_GET['perPage'] : 5);
$start = $page > 1 ? ($page - 1) * $perPage : 0;

$sql = "SELECT * FROM tasts LIMIT " .$start. " , " .$perPage;
//echo $sql;
var_dump($sql);
$total = $db->query("SELECT * FROM tasts")->num_rows;
$pages = ceil($total/$perPage);

$rows = $db->query($sql);

?>
<html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.js"></script>

    <script src="add.js"></script>


    <title>Crud App</title>
</head>
<body ng-app="myModule">

    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <h1>Toto List</h1>

            <div class="col-md-10 col-md-offset-1">
                <table class="table table-hover" >
                    <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Task</button>
                    <button type="button" class="btn btn-default pull-right" onclick="print()">Print</button>
                    <hr><br>
 
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task</h4>
      </div>
      <div class="modal-body" ng-controller="MyController">
        <!--<form method="post" action="add.php">
            <div class="form-group">
                <label>Task Name</label>
                <input type="text" required name="task" class="form-control">
            </div>
            <input type="submit" name="send" value="Add Task" class="btn btn-success">
        </form>-->

        <form name="myForm">
            <div class="form-group">
                <label>Task Angular Name</label>
                <input type="text" required name="ang" class="form-control">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-success" ng-click = "doSave()">Add Angular</button>               
            </div>            
        </form>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Task</th>                      
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                        <?php  while($row = $rows->fetch_assoc()): ?>
                        <tr>        
                        
                            <th><?php echo $row['id'] ?></th>
                            <td class="col-md-10"><?php echo $row['name'] ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>                                             
                        </tr>                       
                        <?php endwhile; ?>

                    </tbody>
                </table>
                <center>
                    <ul class="pagination">
                        <?php for($i = 1; $i <= $pages; $i ++): ?>
                            <li><a href="?page=<?php echo $i; ?>&perPage=<?php echo $perPage; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </center>
            </div>
        </div>    
    </div>

</body>
</html>