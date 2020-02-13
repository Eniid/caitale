<?php

    $one = 0;
    $two = 0;
    if (isset($_GET['one']) && $_GET['one'] !== ''){
        if(ctype_digit($_GET['one'])){
        $one = (int) $_GET['one'];
        }
    }
    if (isset($_GET['two']) && $_GET['two'] !== ''){
        if(ctype_digit($_GET['two'])){

        $two = (int) $_GET['two'];
        }
    }
    
    //var_dump($_GET)

    
    
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Test</title>
</head>
<body>
    <h1><?= "Coucou toi ♥";  ?></h1>
    <form action="index.php" method="get">
        <label for="one">addition </label>
        <input type="text" id="one" name="one" value="<?=$one; ?>">
        
        <label for="two">+</label>
        <input type="text" id="two" name="two"  value="<?=$two; ?>">
        <button>Envoy</button>
    </form>

    
    <table>
        <tr>
            <?php for($e = 0; $e<$two+1; $e++ ):?>
                <th><?=$e;?></th>
            <?php endfor;?>
        </tr>
        <?php 
        for($i = 1;$i<$one+1; $i++):?>
        <tr>
            <th><?= $i ?></th>
            <?php for($e = 1; $e<$two+1; $e++ ):?>
                <td><?=$i;?>x<?=$e;?> = <?=$e*$i;?></td>
            <?php endfor;?>
        </tr>
        <?php endfor;?>
    </table>

    <?= $one . '+' . $two . '=' . ($one + $two);  ?>

</body>
</html>