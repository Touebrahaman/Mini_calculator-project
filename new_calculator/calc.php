<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    margin:auto;
}
*{
    font-family: 'Zen Tokyo Zoo', cursive;
}
.main {
    background-color: rgb(182, 231, 178);
    height: 680px;
    overflow: hidden;
}
.middle {
    margin:0 auto;
    max-width: 400px;
    height: 400px;
    text-align: center;
    background-color: rgb(199 216 195);
    overflow: hidden;
    margin-top: 100px;
    border: 1px solid #0b7d23;
    border-radius: 20px;
}

.form_div {
    width: 300px;
    height: 180px;
    margin: 0 auto;
    margin-top: 30px;
    overflow: hidden;
}
.form_div .num1 {
    margin-top: 10px;
    border-bottom: 1px solid #696dea;
    border-radius: 10px;
}
.form_div .num2 {
    margin-top: 10px;
    border-bottom: 1px solid #696dea;
    border-radius: 10px;
}

.form_div select {
    margin-top: 10px;
    border: 1px solid #696dea;
    border-radius: 10px;
}
.submit_btn {
    width: 85px;
    height: 30px;
    border: 1px solid #696dea;
    border-radius: 15px;
    font-size:15px;
}
p{
    margin:30px 0 0 0;
    color:#1f2161;
}
    </style>
</head>
<body>
    <div class="main">
        <div class="middle">
            <form method="POST">
                <div class="form_div">
                <input type="text" class="num1" name="num1" placeholder="enter a number">
                <input type="text" class="num2" name="num2" placeholder="enter a number">
                <select name="operation">
                    <option>addition</option>
                    <option>subtraction</option>
                    <option>multiplication</option>
                    <option>division</option>
                    <option>modulo</option>
                </select>
                
                </div>
                <input class="submit_btn" name="submit" value="submit" type="submit">
                <div>
                    <p>
                        <?php
                        if(isset($_POST['submit']))
                        {
                            $num1=$_POST['num1'];
                            $num2=$_POST['num2'];
                            //echo "$num1 $num2";
                            $operation=$_POST['operation'];
                            switch($operation)
                            {
                                case "addition":
                                    $result=$num1+$num2;
                                    echo "Addition of $num1 and $num2 is $result";
                                    break;
                                case "subtraction":
                                    $result=$num1-$num2;
                                    echo "Subtraction of $num1 and $num2 is $result";
                                    break;
                                case "multiplication":
                                    $result=$num1*$num2;
                                    echo "Multiplication of $num1 and $num2 is $result";
                                    break;
                                case "division":
                                    $result=$num1/$num2;
                                    echo "Division of $num1 and $num2 is $result";
                                    break;
                                case "modulo":
                                    $result=$num1%$num2;
                                    echo "Modulo of $num1 and $num2 is $result";
                                    break;
                            }

                        }

                        ?>
                    </p>
                </div>
            </form>
        </div>

    </div>


</body>
</html>