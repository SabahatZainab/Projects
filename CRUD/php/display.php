<?php
require('connect.php');
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $course = $_POST['course'];
    $course_ID=$_POST['cid'];
    
    $query1 = "INSERT INTO `savedata`(`fname`, `course`, `course_id`) VALUES ('$fname','$course','$course_ID')";
    $run1 = mysqli_query($connections,$query1) or die(mysqli_error($connections));

    if($run1){
        echo "Form Submitted";

    }else{
        echo "Form Not Submitted";
    }
}else{
    echo "All Fields Required";
}

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
                    <li><a href="#">Saved Data</a></li>
                </ul>
            </nav>
        </header>
        <?php
            $query2 = "SELECT * FROM `savedata`";
            $result = mysqli_query($connections,$query2);
            if(mysqli_num_rows($result) >= 0)
            {
        ?>
        <section>
            <div id="displaydata">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Course</th>
                    <th>Course_ID</th>
                    <th colspan = "2">Operation</th>
                </tr>
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['course'];?></td>
                    <td><?php echo $row['course_id'];?></td>
                    <td><a href="edit.php?id=<?php echo $row['id'];?>"><button type="submit" name="submit">EDIT</button></a></td>
                    <td><a href="delete.php?id=<?php echo $row['id'];?>"><button type="submit" name="submit">DELETE</button></a></td>
                </tr>
                <?php
                }
                ?>
            </table>
            </div>
        </section>
        <?php
            }
        ?>
    </div>
</body>
</html>