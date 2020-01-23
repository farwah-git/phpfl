<!DOCTYPE html>
<head>
    <title>Multiplication tables</title>
</head>
<body>
    <h1>Multiplication Table</h1>
    <form method="POST">
    <label>number:</label> 
    <input type="number" name="number" required>
    <input type="submit" value="Submit">

    </form>
<?php
if (isset($_POST["number"])){
    $number =$_POST["number"];
    $j=1;
    while ($j<=10){
        $result= $number*$j;
        echo $number . " x " . $j . " = " . $result . "br /";
        $j=$j+1;
    }

}

?>
</body
</html>
