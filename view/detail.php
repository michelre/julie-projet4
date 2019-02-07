<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Détail</title>
</head>
<body>
    <h1>Detail <?php echo $post->getTitle(); ?></h1>

    <p>
        <?php echo $post->getContent(); ?>
    </p>

</body>
</html>
