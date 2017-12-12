<!doctype html>
<html lang=nl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="sendmail.php" method="POST">
    <label>Afzender:
    <input type="email" name="from" /></label>
    <br>

    <label>onderwerp:
        <input type="text"name="subject"></label>
    <br>

    <label>Bericht:
    <textarea name="message" cols="30" rows="10"></textarea>
    </label>
    <br>

    <label>:
    <input type="submit" name="submit" value="Verstuur" /></label>
    <br>







</form>



</body>
</html>