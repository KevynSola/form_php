<?php require("../public/form.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks Page | Php Odyssey</title>
    <link rel="stylesheet" href="../assets/css/root.css">
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
</head>

<body>
    <div class="box-text">
        <p>
            Merci
            <?php echo $contactForm['firstname']?>
            <?php echo $contactForm['lastname']?> de nous avoir contacté à propos du choix de votre OS:
            <?php echo $contactForm['os']?>
            <br><br>Un de nos conseiller vous contactera soit à l'adresse
            <?php echo $contactForm['email']?> ou par téléphone au
            <?php echo $contactForm['phone']?> dans les plus brefs délais pour traiter votre demande:
            <br><br>
            <?php echo $contactForm['message']?>
        </p>
    </div>
</body>

</html>
