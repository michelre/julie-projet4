<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>

    <ul>
        <?php foreach ($posts as $post){ ?>
            <li>
                <a href="?action=detailPost&postId=<?php echo $post->getId() ?>">
                    <?php echo $post->getTitle(); ?>
                </a>
            </li>
        <?php } ?>
    </ul>


</body>
</html>
