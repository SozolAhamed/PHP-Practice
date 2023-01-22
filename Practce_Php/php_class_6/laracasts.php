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


<!-- -------------------------------- Laracast with php  Class-6 -->
<?php 
    $books = [
        "Lorem ipsum dolor sit amet.",
        "Lorem ipsum dolor sit",
        "Lorem ipsum dolor"
    ];
?>



<ul>
    <?php foreach ($books as $book) {
        echo "<li>$book</li>";
    }    

    ?>
</ul>

 <br>

<ul>
    <?php foreach ($books as $book) {
        echo "<li>" . $book . "</li>";
    }    

    ?>
</ul>
<!-- -------------------------------- Laracast with php  Class-6 -->

<br>

<h1>Learning list</h1>

<!-- -------------------------------- Laracast with php  Class-6 -->
<?php 
    $learning = [
        "PHP",
        "wordpress theme development",
        "Laravel"
    ];
?>


<ul>
    <?php foreach ($learning as $php) {
       echo "<li>" . $php . "</li>";
    }

    ?>
</ul>

<br>

<ul>
    <?php foreach ($learning as $php) {
       echo "<li>$php</li>";
    }

    ?>
</ul>
<!-- -------------------------------- Laracast with php  Class-6 -->

<h1>Shortcut Echo</h1>

<!-- -------------------------------- Laracast with php  Class-6 -->

<!-- ----- SHORTCUT ECHO -->

<?php 
    $learning = [
        "PHP",
        "wordpress theme development",
        "Laravel"
    ];

    $class6 = [
        "Sozol Ahamed",
        "wordpress theme development",
        "Laravel"
    ];
?>


<ul>
    <?php foreach ($learning as $php) : ?>

        <li><?= $php ?></li>
        
    <?php endforeach; ?>
</ul>





<br>



<ul>
    <?php foreach ($class6 as $sozol) : ?>

        <li><?= $sozol ?></li>

    <?php endforeach; ?>
</ul>
<!-- -------------------------------- Laracast with php  Class-6 -->





</body>

</html>