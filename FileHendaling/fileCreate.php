<?php
if(isset($_POST['file_name'])){
    
    $filename = "File/".$_POST['file_name'];

    $contect = $_POST['contect'];

    $file=fopen($filename,"w") or die ("File Not Created! :( ");

    fwrite($file,$contect);

    fclose($file);

    echo "File Is Created :) ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Name :</label>
            <input type="text" class="form-control" name="file_name" id="file_name" placeholder="" />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">contect :</label>
            <textarea name="contect"></textarea>
        </div>
        <button>Create File</button>
    </form>
</body>

</html>