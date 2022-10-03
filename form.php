<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Php | Quest Odyssey</title>
    <link rel="stylesheet" href="root.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Form PHP with POST method</h1>
    <form action="/thanks.php" method="post">
        <fieldset>
            <div>
                <label for="firstname">Firstname</label>
                <input type="text" id="firstname" name="firstname" placeholder="Firstname">
            </div>
            <div>
                <label for="lastname">Lastname</label>
                <input type="text" id="lastname" name="lastname" placeholder="Lastname">
            </div>
            <div>
                <label for="os">Choose your OS</label>
                <select name="os" id="os">
                    <option value="mac">MacOS</option>
                    <option value="linux">Linux</option>
                    <option value="windows">Windows</option>
                </select>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Email">
            </div>
            <div>
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="06-32-56-87-87"
                    pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required>
            </div>
            <div>
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"
                    placeholder="Write your message here!"></textarea>
            </div>
            <div class="btn-submit">
                <input type="submit">
            </div>
        </fieldset>
    </form>
</body>


</html>