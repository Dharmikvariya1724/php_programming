<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>celculetor</title>
</head>

<body>
    <div>
        <div class="app-form-grop showdata">
            <p>
                <?php
                    
                    if(isset($_POST['submit'])){
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        // echo $num1 . $num2;
                        $opretion = $_POST['opretion'];
                        
                        switch($opretion){

                            case "add" :  $sum = $num1 + $num2;
                            echo $sum;
                            break;

                            case "sub" :  $sub = $num1 - $num2;
                            echo $sub;
                            break;

                            case "mult" :  $mult = $num1 * $num2;
                            echo $mult;
                            break;

                            case "div" :  $div = $num1 / $num2;
                            echo $div;
                            break;

                            default:
                                echo "this peramiter is NOT Exist";
                            break;
                            
                        }
                    }
                    
                ?>
            </p>
        </div>
    </div>

    <form method="POST" action="">
        <div class="app-form-group">
            <input type="text" name="num1" class=" app-form-control">
        </div>

        <div>
            <select name="opretion" id="">
                <option value="" diseble></option>
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="mult">*</option>
                <option value="div">/</option>
            </select>
        </div>

        <div class="app-form-group">
            <input type="text" name="num2" class="app-form-control">
        </div>

        <div>
            <input type="submit" name="submit" value="submit" class="app-form-button">
        </div>
    </form>

</body>

</html>