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
    <div class="container text-center">
        <h3>Tasks</h3>
        <div>
            <ul class="list-unstyled">
                <?php foreach($task as $key => $value) : ?>
                <li> 
                    <strong><?= ucwords($key); ?>: </strong><?= $value ?>
                </li>
                <?php endforeach ?>
                <?= $task['completed'] ? 'complete' : 'incomplete'; ?>
            </ul>
        </div>
    </div>
</body>
</html>