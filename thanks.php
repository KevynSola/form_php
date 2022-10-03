<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks Page | Php Odyssey</title>
    <link rel="stylesheet" href="root.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box-text">
        <p>
            Merci
            <?php echo $_POST['firstname']?>
            <?php echo $_POST['lastname']?> de nous avoir contacté à propos du choix de votre OS:
            <?php echo $_POST['os']?>
            <br><br>Un de nos conseiller vous contactera soit à l'adresse
            <?php echo $_POST['email']?> ou par téléphone au
            <?php echo $_POST['phone']?> dans les plus brefs délais pour traiter votre demande:
            <br><br>
            <?php echo $_POST['message']?>
        </p>
    </div>
</body>

</html>