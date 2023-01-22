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

<?php


    $books =[
        [
            'name' => 'Project hail mary',
            'author' => 'Andy Weir',
            'releaseYear' => '2021',
            'PurchaseUrl' => 'https://youtu.be/aSG5MXzn01Q?list=PL3VM-unCzF8ipG50KDjnzhugceoSG3RTC'
        ],

        [
            'name' => 'Thev Martian',
            'author' => 'Andy Weir',
            'releaseYear' => '2012',
            'PurchaseUrl' => 'https://youtu.be/J59lSgUl1vY'
        ]

        ];
        
        $filteredBooks = array_filter($books, function ($book) {
            return $book['releaseYear'] < 2000;
        });
        
        $filteredBooks = array_filter($books, function ($book) {
            return $book['author'] === 'Andy Weir';
        });
        
?>



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