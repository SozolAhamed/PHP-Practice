
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
        
require "index.view.php";