<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        #h {
            background-color: aliceblue;
            color: black;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h3 {
            margin: 0;
            font-style: italic;
        }

        #nav {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        a {
            padding: 10px 20px;
            text-decoration: none;
            color: blueviolet;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #d8d8d8;
        }

        hr {
            border: 1px solid #ccc;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div id="h">
        <h3>Student Details</h3>
        <hr>
        <div id="nav">
          <a href="student.html">Home</a>
          <a href="newstudent.html">New Student</a>
          <a href="removestudent.html">Delete Student</a>
          <a href="modifystudent.html">Modify Student</a>
          <a href="readstudent.php">View Details</a>
        </div>
    </div>


<?php
$host='localhost';
$user='root';
$pass='';
$db='students';

$conn=new mysqli($host,$user,$pass,$db);
$sql="select * from student_details";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
    echo "<table border='1' align='center'>";
    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
        echo '<td>' . $row['student_id'] . '</td>';
        echo '<td>' . $row['student_name'] . '</td>';
        echo '<td>' . $row['student_age'] . '</td>';
        echo '<td>' . $row['student_q'] . '</td>';
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'Record is empty...';
}

$conn->close();
?>
</body>
</html> 