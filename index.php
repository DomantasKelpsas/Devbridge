<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devbridge special task</title>
</head>
<body>
<div class="input">
    <h2>Input</h2>
    <form name="form" action="" method="get">
        <label for="input_num">Please enter int value</label>
        <br>
        <input type="text" name="input_num" id="input_num" value="0">
        <input type="submit">
    </form>
    <?php

    $input = $_GET['input_num'];
    $array = [];
    $is_magic = false;
    if (filter_input(INPUT_GET, 'input_num', FILTER_VALIDATE_INT) && $input > 0) {

        echo "<br>";
        echo "<h4>" . "Number: " . $input . "<h4>";

        $is_magic = true;

        $num_digits = strlen($input);
        $input_num_array = str_split($input);
        asort($input_num_array);
        $input_imploded = implode($input_num_array);


        for ($i = 1; $i <= $num_digits; $i++) {

            $temp = $input * $i;
            $temp_num_array = str_split($temp);
            asort($temp_num_array);

            $temp = implode($temp_num_array);

            if ($temp === $input_imploded) {

            } else {

                $is_magic = false;
                break;

            }

        }


    } else {
        echo "<br>";
        echo "Value is not Int (or is < 0)";

    }


    ?>
</div>
<div class="output">
    <h2>Output</h2>
    <?php
    if ($is_magic) {
        echo "it's magic!";
    } else {
        echo "it's not magic :/";
    }
    ?>

</div>

</body>
</html>
