<<<<<<< Updated upstream
<!DOCTYPE html>
<?php
/*test test */
include 'db.php';

$id = $_GET['id'];
echo $id;

/*$name = "updated record 1";*/
$sql = "SELECT * FROM tasts WHERE id='$id'";

$rows = $db->query($sql);
$row = $rows->fetch_assoc();

if(isset($_POST['send'])){
    $task = htmlspecialchars($_POST[task]);
    $sql = "UPDATE tasts SET name = '$task' WHERE id = '$id'";
    $db->query($sql);
    header('location: index.php');
}


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

    <title>Crud App</title>
</head>
<body>
    <div class="container">
        <center><h1>Update Todo List</h1></center>

        <div class="row" style="margin-top: 70px;">
            <div class="col-md-10 col-md-offset-1">
                                 
                    <hr><br>

                    <form method="post">
                        <div class="form-group">
                            <label>Task Name</label>
                            <input type="text" required name="task" value="<?php echo $row['name']; ?>" class="form-control">
                        </div>
                        <input type="submit" name="send" value="Update" class="btn btn-success">&nbsp;
                        <a href="index.php" class="btn btn-warning">Back</a>
                    </form>               

            </div>
        </div>    
    </div>

</body>
=======
<!DOCTYPE html>
<?php
/*test test */
include 'db.php';

$id = $_GET['id'];
echo $id;

/*$name = "updated record 1";*/
$sql = "SELECT * FROM tasts WHERE id='$id'";

$rows = $db->query($sql);
$row = $rows->fetch_assoc();

if(isset($_POST['send'])){
    $task = htmlspecialchars($_POST[task]);
    $sql = "UPDATE tasts SET name = '$task' WHERE id = '$id'";
    $db->query($sql);
    header('location: index.php');
}


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

    <title>Crud App</title>
</head>
<body>
    <div class="container">
        <center><h1>Update Todo List</h1></center>

        <div class="row" style="margin-top: 70px;">
            <div class="col-md-10 col-md-offset-1">
                                 
                    <hr><br>

                    <form method="post">
                        <div class="form-group">
                            <label>Task Name</label>
                            <input type="text" required name="task" value="<?php echo $row['name']; ?>" class="form-control">
                        </div>
                        <input type="submit" name="send" value="Update" class="btn btn-success">&nbsp;
                        <a href="index.php" class="btn btn-warning">Back</a>
                    </form>               

            </div>
        </div>    
    </div>

</body>
>>>>>>> Stashed changes
</html>