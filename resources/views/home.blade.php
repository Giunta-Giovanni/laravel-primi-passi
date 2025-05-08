<?php


use PhpParser\Node\Stmt\Foreach_;

var_dump($author);
var_dump($title);
var_dump($todayLessons);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>HomePage</title>
</head>

<body class="bg-light">

    <!-- componente header -->
    @include('partials.header')

    <main class="container">
        <div class="bg-white p-4 rounded shadow-sm">
            <h2 class="h4 text-secondary mb-3"><?php echo $title; ?></h2>
            <p class="mb-4">Autore: <span class="fw-semibold text-primary"><?php echo $author; ?></span></p>

            <h3 class="h5 text-secondary mb-3">Oggi ho studiato:</h3>
            <ul class="list-group">
                <?php foreach ($todayLessons as $argument): ?>
                    <li class="list-group-item"><?php echo $argument ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </main>
</body>

</html>