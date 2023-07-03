<?php 
    $name = $_GET['userName'];
    $nameAccess = false;
    if (strlen($name) > 3){
        $nameAccess = true;
    };

    $mail = $_GET['userEmail'];
    $mailAccess = false;
    if (str_contains($mail, '@') && str_contains($mail, '.')){
        $mailAccess = true;
    };

    $num = $_GET['userNum'];
    $numAccess = false;
    if (gettype(intval($num)) == 'integer'){
        $numAccess = true;
    } else {
        var_dump(gettype($num));
    };

    if($nameAccess && $mailAccess && $numAccess){
        echo 'Access Verfied';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>second snackkkk server</title>
</head>
<body>
    
</body>
</html>