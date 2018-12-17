<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Learnin' PHP</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>

</style>

</head>
<body>
    <header class="bg-light text-center">
        <h1>
            <?php
            echo "Hello, " . $_GET["name"];
            ?>
        </h1>

    </header>
    
</body>
</html>