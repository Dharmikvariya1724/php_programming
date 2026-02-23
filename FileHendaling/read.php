<?php

if(isset($_FILES['file'])){

    $file=$_FILES['file']['tmp_name'];
    $myfile = fopen($file,"r") or die ("File Not Found!:( ");
    echo fread($myfile,filesize($file));

    fclose($myfile);

}

// $file = "File/dharmik.txt";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">

        </br></br><input type="file" name="file"></br></br>
        <button> read File </button>
    </form>

</body>

</html>