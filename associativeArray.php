<?php


$books = [
    [
        'name' => "Book-1",
        'author' => 'Author-1',
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => "Book-2",
        'author' => 'Author-2',
        'purchaseUrl' => 'http://example.com'
    ]
];


?>

<ul>

    <?php foreach ($books as $book) : ?>

        <li>
            <a href="<?= $book['purchaseUrl'] ?>"><?= $book['name'] ?></a>
        </li>

    <?php endforeach ?>
</ul>