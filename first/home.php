<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Learnin' PHP</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="app.css" rel="stylesheet" type="text/css" />
<style>

</style>

</head>
<body>
    <div class="container bg-light">
        <header class="text-center">
            <h1>
                <?= $greeting ?>
                <br>
                <?= $age, $gender ?>
            </h1>
        </header>
        <div class="container">
            <div class="text-center bg-gray">
                <h5>Family Members</h5>
                <ul class="list-unstyled d-flex text-center justify-content-between">
                <?php foreach ($familyMembers as $member){
                        echo "<li>$member</li>";
                    }
                ?>
                </ul>
            </div>
            <div class="text-center">
                <h5>Family Animals</h5>
                <ul class="list-unstyled d-flex text-center justify-content-between">
                    <?php foreach ($petNames as $pet) :?> 
                        <li><?= $pet; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>