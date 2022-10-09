<?php

$contactForm['firstname'] = '';
$contactForm['lastname'] = '';
$contactForm['email'] = '';
$contactForm['phone'] = '';
$contactForm['os'] = '';
$contactForm['message'] = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    foreach($_POST as $key => $value) {
        $contactForm[$key] = trim($value);
    }

    $errors = [];

    if (empty($contactForm['firstname']) || !isset($contactForm['firstname'])) {
        $errors[] = 'Le prénom est obligatoire';
    }

    if (empty($contactForm['lastname']) || !isset($contactForm['lastname'])) {
        $errors[] = 'Le nom est obligatoire';
    }

    if (empty($contactForm['email']) || !filter_var($contactForm['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'adresse email est obligatoire";
    }

    if (empty($contactForm['phone']) && !is_numeric($contactForm['phone'])) {
        $errors[] = "Le numéro est en chiffre & obligatoire";
    }

    if (empty($errors)) {
      
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Php | Quest Odyssey</title>
    <link rel="stylesheet" href="../assets/css/root.css">
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
</head>

<body>
    <h1>Form PHP with POST method</h1>
    <form action="thanks.php" method="post">
        <fieldset>
            <?php if(!empty($errors)) : ?>
                <ul class="errorList">
                    <?php foreach($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>
            <div>
                <label for="firstname">Firstname*</label>
                <input type="text" id="firstname" name="firstname" placeholder="Kevyn" value="<?= $contactForm['firstname'] ?>" required>
            </div>
            <div>
                <label for="lastname">Lastname*</label>
                <input type="text" id="lastname" name="lastname" placeholder="SOLA" value="<?= $contactForm['lastname'] ?>" required>
            </div>
            <div>
                <label for="os">Choose your OS</label>
                <select name="os" id="os" required>
                    <option value="choose" selected></option>
                    <option value="mac">MacOS</option>
                    <option value="linux">Linux</option>
                    <option value="windows">Windows</option>
                </select>
            </div>
            <div>
                <label for="email">Email*</label>
                <input type="text" id="email" name="email" placeholder="blabla@gmail.com" value="<?= $contactForm['email'] ?>" required>
            </div>
            <div>
                <label for="phone">Phone Number*</label>
                <input type="tel" id="phone" name="phone" placeholder="06-32-56-87-87" minlength="10" maxlength="14" value="<?= $contactForm['phone'] ?>" required>
            </div>
            <div>
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"
                    placeholder="Write your message here!"></textarea>
            </div>
            <div class="btn-submit">
                <input type="submit">
            </div>
            <p>* est obligatoire</p>
        </fieldset>
    </form>
</body>


</html>
