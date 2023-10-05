<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title>Kontakt</title>
</head>
<body>
<?php include('header.php'); ?>

 

    <section>
<h1>Kontakt</h1>
<form action="#" method="post" onsubmit="showAlert(); return false;">
<!-- Formularz kontaktowy -->
<label for="name">Imię:</label>
<input type="text" id="name" name="name" required>
<br>
<label for="email">Email:</label>
<input type="email" id="email" name="email" required>
<br>
<input type="submit" value="Wyślij">
</form>
</section>

 

    <?php include('footer.php'); ?>

 

    <script>
        function showAlert() {
            alert("Nie można wysłać formularza");
        }
</script>
</body>
</html>