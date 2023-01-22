<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
<h1>Recommended Books</h1>

<!-- -------------------------------- Laracast with php  Class-9 -->

<ul>
    <?php foreach ($filteredBooks as $book) : ?>
    <li>
        <a href="<?= $book['PurchaseUrl'] ?>">
            <?= $book ['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
        </a>
    </li>

    <?php endforeach; ?>
</ul>

<!-- -------------------------------- Laracast with php  Class-9 -->






</body>

</html>