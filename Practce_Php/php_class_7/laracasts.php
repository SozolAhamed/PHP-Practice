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


<!-- -------------------------------- Laracast with php  Class-7 -->
<?php 
    $books = [
        "Rasel Ahamed",
        "Sozol Ahamed",
        "Ratul Ahamed",
        "Tomal Khan"
    ];
?>


<h2><?= $books[0] ?></h2>
<h2><?= $books[1] ?></h2>
<h2><?= $books[2] ?></h2>
<h2><?= $books[3] ?></h2>
<!-- -------------------------------- Laracast with php  Class-7 -->
<br>
<h1>Practice php</h1>
<!-- -------------------------------- Laracast with php  Class-7 -->
<?php 
    $books = [
        "PHP",
        "Wordpress",
        "Vue js",
        "Tailwind"
    ];
?>


<h2><?= $books[0] ?></h2>
<h2><?= $books[1] ?></h2>
<h2><?= $books[2] ?></h2>
<h2><?= $books[3] ?></h2>
<!-- -------------------------------- Laracast with php  Class-7 -->

<br>

<!-- -------------------------------- Laracast with php  Class-7 -->

<?php
    $books =[
        [
            'name' => 'Learn PHP',
            'author' => 'PHP Books',
            'PurchaseUrl' => 'https://youtu.be/aSG5MXzn01Q?list=PL3VM-unCzF8ipG50KDjnzhugceoSG3RTC'
        ],

        [
            'name' => 'Learn Wordpress',
            'author' => 'Wordpress Books',
            'PurchaseUrl' => 'https://youtu.be/J59lSgUl1vY'
        ]
        ];
?>

<ul>
    <?php foreach ($books as $book) : ?>
    <li>
        <a href="<?= $book['PurchaseUrl'] ?>">
            <?= $book ['name']; ?>
        </a>
    </li>

    <?php endforeach; ?>
</ul>

<!-- -------------------------------- Laracast with php  Class-7 -->






</body>

</html>