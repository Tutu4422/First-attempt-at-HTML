<?php
$answer =0;
$inputOne= $_GET['input_one'];
$inputTwo= $_GET['input_two'];
$operator= $_GET['operator'];
function calculate($inputOne, $inputTwo, $operator)
{
    if ($inputOne == '' or $inputTwo =='') {
        return 0;
    }
    switch ($operator) {
        case '+':
            return $inputOne + $inputTwo;
            break;
        case '-':
            return $inputOne - $inputTwo;
            break;
        case '/':
            return $inputOne / $inputTwo;
            break;
        case '*':
            return $inputOne * $inputTwo;
            break;
        default:
            return 0;
    }
}
$answer = calculate($inputOne, $inputTwo, $operator);
?>
<!DOCTYPE html>
<html>

    <head>
        <title>My calculator</title>
    </head>

    <body>
        <form method="GET">
            <input type="number" id="Number" name="input_one">
            <select name="operator" id="operation-select">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>
            </select>
            <input type="number" id="Number" name="input_two">
            <input type="submit" value="calculate">
            <br>
            <br>
        </form>
        <p>Answer: <?php echo $answer;?></p>
    </body>

</html>
