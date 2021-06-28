<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
if (isset($_POST['p_submit'])){
    $p_number = $_POST['p_number'];
    $percent = $_POST['percent'];
    $result = ($p_number*$percent)/100; 
    $p_result = number_format($result,2);
}else{
    $p_number="...";
    $percent="...";
    $p_result="";

}

if (isset($_POST['avg_submit'])){
    $num_1 = $_POST['num1'];
    $num_2 = $_POST['num2'];
    $num_3 = $_POST['num3'];
    $avg = ($num_1+$num_2+$num_3)/3; 
    $average = number_format($avg,2);
}else{
    $num_1=$num_2=$num_3="...";
    $average="";

}
?>

<body>
    <div class="body">
        <table>
            <tr>
                <th>
                    <h2>Percentage calculator</h2>
                </th>
                <th>
                    <h2>Average calculator </h2>
                </th>
            </tr>
            <tr>
                <td>
                    <form action="" method="post">
                        <span>Enter Number:</span>
                        <br>
                        <input type="number" name="p_number" id="input" required placeholder="Number">
                        <br><br>
                        <span>Enter Percentage:</span>
                        <br>
                        <input type="number" name="percent" id="input" required placeholder="Percentage (%)">
                        <br><br>
                        <div class="output">
                            <span>Result:</span>
                            <label for=""><?php echo $percent;?>% of <?php echo $p_number;?></label>
                            <p><?php echo $p_result; ?></h3>
                        </div>
                        <input type="submit" name="p_submit" id="submit" required>
                        <input type="reset" id="reset">
                    </form>

                </td>
                <td>
                    <form action="" method="post">
                        <span>Enter first Number:</span>
                        <br>
                        <input type="number" name="num1" id="input" required placeholder="1st number">
                        <br><br>
                        <span>Enter second number:</span>
                        <br><input type="number" name="num2" id="input" required placeholder="2nd number">
                        <br><br>
                        <span>Enter third number:</span>
                        <br>
                        <input type="number" name="num3" id="input" required placeholder="3rd number">
                        <br><br>
                        <div class="output2">
                            <span>Average:</span>
                            <label for=""><?php echo "(".$num_1.", ".$num_2.", ".$num_3.")"?></label>
                            <p><?php echo $average; ?></h3>
                        </div>
                        <input type="submit" name="avg_submit" id="submit2">
                        <input type="reset" id="reset">
                    </form>

                </td>
            </tr>

        </table>
    </div>
</body>

</html>