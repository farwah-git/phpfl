<!DOCTYPE html>
<html>
<body>

<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//echo "Peter is " . $age['Peter'] . " years old.";
$weight = array ("Peter"=>"59", "Ben"=>"66", "Joe"=>"50");
//use of foreach loop to get the associative array 
//printed with the keys
foreach ($age as $key => $value) {

    echo "key: " . $key . " $value " . "years" . "<br />";
}
foreach ($weight as $key => $value) {

    echo "key: " . $key . " $value " . "kgs" . "<br />";
}

?>

</body>
</html>