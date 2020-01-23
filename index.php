<?php
if(isset($_POST["fname"])){
    $fname = $_POST["fname"];
    $result = 2020 - $fname;
}
echo $result;
?>

<form method="POST">
<label>name</label>
<input type="text" name="fname" required>
<input type="submit" name="send">
</form>
