<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    



<!-- -------------------------------- Laracast with php  Class-5 -->

<?php 

    $name = "dark matter";
    $read = false;


    if ($read) {
        $massage = "You have read $name";
    }
    else {
        $massage = "you have NOT read $name";
    }

?>

<h1>
    <?php echo $massage; ?>
</h1>

<!-- -------------------------------- Laracast with php  Class-5 -->


<!-- -------------------------------- Laracast with php  Class-5 -->

<?php 
    $myName = "Sozol Ahamed";
    $sozol = false;


    if ($sozol) {
        $profession = "web Developer $myName";
    }

    else {
        $profession = "NOT a Web Developer $myName";
    }
?>

<h2> <?php echo $profession; ?> </h2>

<!-- -------------------------------- Laracast with php  Class-5 -->


<!-- -------------------------------- Laracast with php  Class-5 -->

<?php 
    $xy = "laravel";
    $yx = false;

    

    if ($yx) {
        $massage = "I am learning $xy";
    }
    else {
        $massage = "I am not learning $xy";
    }

?>

<h2><?php echo $massage ?></h2>

<!-- -------------------------------- Laracast with php  Class-5 -->




</body>

</html>