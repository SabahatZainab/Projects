<?php
include "connect.php";

if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
    $query = "SELECT * FROM `savedata` WHERE id = '$id'";
    $run = mysqli_query($connections,$query);
    if(!$run){
        echo "Error";
    }elseif(mysqli_num_rows($run)>0)
    {   
        while($result = mysqli_fetch_assoc($run))
        {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATIONS</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div id="container">
        <header>
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="display.php">Saved Data</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <form method="POST">
            <fieldset>
                <legend> Update Data</legend>
                
            <div id="inputfields">
                <tr>
                    <td><label for="fname">Full Name: </label><input type="text" name = "fname" placeholder="Full Name" value ="<?php echo $result['fname'];?>"> <br></td>
                </tr>
                <tr>
                    <td><label for="course">Course: </label><input type="text" name = "course" placeholder="Course" value ="<?php echo $result['course'];?>"> <br></td>
                </tr>
                <tr>
                    <td><label for="cid">Course_ID: </label><input type="number" name = "cid" placeholder="Course_ID" value ="<?php echo $result['course_id'];?>"><br>    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="update">Update</button></td>
                </tr>    
            </div>
            </fieldset>
        </form>
           
        </section>
    </div>
</body>
</html>
<?php
        }
        
    }
}
?>
<?php
if(isset($_REQUEST['update']))
{
    $fname = $_POST['fname'];
    $course = $_POST['course'];
    $course_ID = $_POST['cid'];

    $update = "UPDATE `savedata` SET 
    `fname`='$fname',`course`='$course',`course_id`='$course_ID'
     WHERE id = '$id'";

     $output = mysqli_query($connections, $update);
     if($output){
        header("location: display.php");
     }else{
        echo "$output";
     }
}

?>
