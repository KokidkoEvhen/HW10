<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use Hillel\Models\Category;

//$categories = [
//    [
//        'title' => 'PHP',
//        'slug' => 'Best language',
////        'created_at' => date('Y-m-d')
//    ],
//    [
//        'title' => 'HTML',
//        'slug' => 'Not a programming language'
//    ],
//    [
//        'title' => 'JawaScript',
//        'slug' => 'Everyone hate it'
//    ],
//    [
//        'title' => 'MySql',
//        'slug' => 'How to learn it'
//    ],
//    [
//        'title' => 'Go',
//        'slug' => 'The best name for programming language'
//    ]
//];

//foreach ($categories as $category) {
//    Category::create($category);
//}

//$category = Category::find(1);
//$category->title = 'Some new title';
//$category->save();

//$category = Category::find(1);
//$category->delete();