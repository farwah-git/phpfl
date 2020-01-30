<!DOCTYPE html>
<head>
</head>
<body>


<?php
    $std = array
    (
        array("Faisal"=>"1001","tm"=>"100","om"=>"69"),
        array("Farah"=>"1002","tm"=>"100","om"=>"76"),
        array("Zahra"=>"1003","tm"=>"100","om"=>"82"),
        array("Rida"=>"1004","tm"=>"100","om"=>"88"),
    );

echo $std[0]["Faisal"].": In stock: ".$std[0]["tm"].", sold: ".$std[0]["om"].".<br>";
echo $std[1]["Farah"].": In stock: ".$std[1]["tm"].", sold: ".$std[1]["om"].".<br>";
echo $std[2]["Zahra"].": In stock: ".$std[2]["tm"].", sold: ".$std[2]["om"].".<br>";
echo $std[3]["Rida"].": In stock: ".$std[3]["tm"].", sold: ".$std[3]["om"].".<br>";

?>
</body>
</html>
