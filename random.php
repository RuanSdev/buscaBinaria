<?php
$arry = [];

for ($i = 0; $i <= 10; $i++) {
    $value = rand(1, 100);
    if (in_array($value, $arry)) {
        $i -= 1;
    } else {
        array_push($arry, $value);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random</title>
</head>

<body>
    <ul>

        <?php
        foreach ($arry as $item) {
        ?>
            <li><?= $item ?></li>
        <?php
        }
        ?>
    </ul>

</body>

</html>