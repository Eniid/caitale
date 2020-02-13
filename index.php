<?php

    $pays = [
        'france'=> [
            'capital' => 'paris',
            'drapeau' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Ensign_of_France.svg/langfr-225px-Ensign_of_France.svg.png',
        ],
            
        'belgique'=> [
            'capital' => 'bruxelles',
            'drapeau' => 'https://i.ebayimg.com/images/g/Rl4AAOSwomVbEosr/s-l300.png',
        ],

        'corée du nord'=> [
            'capital' => 'Pyongyang',
            'drapeau' => 'https://www.icône.com/images/icones/4/3/flag-kp.png',
        ],
        
        
    ];

    $selectedCountry =''; 

    if (isset($_GET['pays']) && $_GET['pays'] !== ''){ // vérifications pas vire && set
        if(array_key_exists($_GET['pays'], $pays)){ // véifier que le pays est bien dans le tableau et parapètre le pay séléctionné du tableau.
            $selectedCountry = $_GET['pays'];
        }   else {
            echo "Stop!! Arrêtez de tapez n'importe quoi dans l'URL!! =) ♥";
        }
    }

    

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
    <h1><?= "Apprendre les capitales";  ?></h1>

    <form action="index.php">
    <select name="pays" id="pays">
            <?php foreach($pays as $key => $country):?>
                <option value="<?= $key ?>" <?php if($key === $selectedCountry) echo 'selected' ?>><?= mb_strtoupper($key)  ?></option>
                
            <?php endforeach;?>
        </select>
        <button>send</button>
    </form>
    <br>
    
    <?php
    if($selectedCountry !== ""):?> 
    <?php  echo 'La capitale de ' . ucwords($selectedCountry) . ' est ' . ucfirst($pays[$selectedCountry]['capital'])?>

    <img src="<?= $pays[$selectedCountry]['drapeau'] ?>" alt="">
    <?php endif ;?> 

</body>
</html>