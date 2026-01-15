<?php
$tring = "Minsan pag wala si mama mahilig ako pumunta sa bakod, ilibing sarili ko at magkunware na isa akong carrot.";
$matanda = "Minsan pag wala si";
$bago = "Kada alis ni";
$itlog = "ko";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minahal Ko Siya</title>
    <style> <?php include 'css/styles.css' ?></style>
    <?php include 'includes/header.php'?>
</head>
<body>
    <p>Changing the Case of Jolly Characters</p>
    <table>
        <tr>
            <th>Lowercase</th>
            <td><?= strtolower($tring)?></td>
        </tr>
        <tr>
            <th>Uppercase</th>
            <td><?= strtoupper($tring)?></td>
        </tr>
        <tr>
            <th>Capitalize</th>
            <td><?= ucwords($tring)?></td>
        </tr>
    </table>
    <p>Counting Jolly Characters and Words</p>
    <table>
        <tr>
            <th>Number of Characters</th>
            <td><?= strlen($tring)?></td>
        </tr>
        <tr>
            <th>Number of Words</th>
            <td><?= str_word_count($tring)?></td>
        </tr>
    </table>
    <p>Removing and Replacing Characters</p>
    <table>
        <tr>
            <th>RM WS Left</th>
            <td><?= ltrim($tring)?></td>
        </tr>
        <tr>
            <th> RM WS Right</th>
            <td><?= rtrim($tring)?></td>
        </tr>
        <tr>
            <th> RM WS LR</th>
            <td><?= trim($tring)?></td>
        </tr>
        <tr>
            <th> String Replace</th>
            <td> <?= str_replace($matanda, $bago, $tring)?></td>
        </tr>
        <tr>
            <th>String Ireplace</th>
            <td> <?= str_ireplace($matanda, $bago, $tring)?></td>
        </tr>
        <tr>
            <th>String Repeat</th>
            <td> <?= str_repeat($tring, 3) ?></td>
        </tr>
    </table>
    <p> extra things </p>
    <table>
        <tr>
            <th>String Position</th>
            <td> <?= strpos($tring, $itlog)?></td>
        </tr>
        <tr>
            <th>String Theory</th>
            <td> <?= strrpos($tring, $itlog)?></td>
        </tr>
        <tr>
            <th> Meron ba Theory</th>
            <td> <?= str_contains($tring, $matanda)?></td>
        </tr>
        <tr>
            <th> Kung saan nagsimula Theory</th>
            <td> <?= str_starts_with($tring, $matanda)?></td>
        </tr>
        <tr> 
            <th> Kung saan natapos Theory</th>
            <td><?= str_ends_with($tring, "carrot.")?></td>
        </tr>
    </table>
    <h6>&copy; <?php echo date('M,Y'), " Renzo D. Nengasca | WD-201 "?></h6>
</body>
</html>