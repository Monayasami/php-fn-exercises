
//php-user-log
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <form method="post">
        <label for="name">Nome:</label>
        <input type="text" name="name" required>
        <br>

        <label for="surname">Cognome:</label>
        <input type="text" name="surname" required>
        <br>

        <label for="message">Messaggio:</label>
        <textarea name="message" required></textarea>
        <br>

        <input type="submit" value="Invia">
    </form>
</body>
</html>

<?php
$userData = array(
  "name_and_surname" => array(
   "name" => $name,
    "surname" => $surname
        ),
        "message" => $message
    );
    echo "Nome: {$userData['name_and_surname']['name']}";
    echo "Cognome: {$userData['name_and_surname']['surname']}";
    echo "Messaggio: {$userData['message']}";

?>




//php-banned-words
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura Parole</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 600px;
            margin: 20px auto;
        }
        textarea, input, button {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form>
        <label for="textArea">Inserisci il testo:</label>
        <textarea id="textArea" name="text" rows="5" cols="40" required></textarea>
        <br>

        <label for="searchString">Parola da censurare:</label>
        <input type="text" id="searchString" name="searchString" required>
        <br>

        <button type="button">Censura</button>
    </form>    
</body>
</html>

