<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background: ;
        }
       div{
        margin-top:100px;
        padding: 30px;
        background: cyan;
        text-align: center;
        width: 30rem;
        max-height: 100rem;
        align-self: center;
        border: 1px solid blue;
        box-sizing: border-box;
        
        }
        a{
            text-decoration: none;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div>
<strong><?php
session_start();
 
$fname =$_SESSION['fname'];
$sname = $_SESSION['sname'];
$email = $_SESSION['email'];
$dob = $_SESSION['dob'];
$color = $_SESSION['color'];
$gender = $_SESSION['gender'];
$department = $_SESSION['department'];
    echo "Welcome ", $fname , " ", $_SESSION['sname'] ,". ", "I am Oluwafemi by name.", "<br>", "<br>", "Here are your details you entered."; 
echo "<br>";
echo "<br>";
?>
</strong><strong>
<?php
   echo "your emial address is: ", $email; 

echo "<br>";
echo "<br>";

?>
</strong><strong>
<?php
    echo "Date of birth: ", $dob; 

    echo "<br>";
echo "<br>";
?>

</strong>
<strong>
<?php
echo "Your gender is: " . $gender;
echo "<br>";
echo "<br>";

?>
</strong>
<strong>


<?php
   echo "<style> body{ background: $color; } </style>";
?>





<?php
echo "Nice meeting you.  <a href='index.php'>Go Back</a>";
?>

</strong> 
</div>










<script src="index.js"></script>
</body>
</html>
