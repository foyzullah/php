<?php

$books = [

    'books-one',
    'books-two',
    'books-three'
];

?>

<ul>
    <!-- <?php
            // foreach ($books as $book) {

            //     echo "<li>" . $book . "</li>"; //one way
            //     echo "<li>$book</li>"; // two way
            // }
            ?> -->

    <?php foreach ($books as $book) : ?>
        <li><?= $book ?></li>

    <?php endforeach ?>
</ul>