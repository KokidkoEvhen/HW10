<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use Hillel\Models\Category;
use Hillel\Models\Post;
use Hillel\Models\Tag;

$categories = [
    [
        'title' => 'PHP',
        'slug' => 'Best language',
    ],
    [
        'title' => 'HTML',
        'slug' => 'Not a programming language'
    ],
    [
        'title' => 'JawaScript',
        'slug' => 'Everyone hate it'
    ],
    [
        'title' => 'MySql',
        'slug' => 'How to learn it'
    ],
    [
        'title' => 'Go',
        'slug' => 'The best name for programming language'
    ]
];

foreach ($categories as $category) {
    Category::create($category);
}

$category = Category::find(1);
$category->title = 'Some new title';
$category->save();

$category = Category::find(1);
$category->delete();

$posts = [
    [
        'title' => 'post1',
        'slug' => 'post1',
        'body' => 'post1',
        'category_id' => '2'
    ],
    [
        'title' => 'post2',
        'slug' => 'post2',
        'body' => 'post2',
        'category_id' => '3'
    ],
    [
        'title' => 'post3',
        'slug' => 'post3',
        'body' => 'post3',
        'category_id' => '4'
    ],
     [
        'title' => 'post4',
        'slug' => 'post4',
        'body' => 'post4',
        'category_id' => '2'
    ],
    [
        'title' => 'post2',
        'slug' => 'post2',
        'body' => 'post2',
        'category_id' => '3'
    ],
    [
        'title' => 'post5',
        'slug' => 'post5',
        'body' => 'post5',
        'category_id' => '4'
    ],
];

foreach ($posts as $post) {
    Post::create($post);
}

$post = Post::find(2);
$post->title = 'New title';
$post->category_id = 2;
$post->save();

$tags = [
    [
        'title' => 'tag1',
        'slug' => 'slug1',
    ],
    [
        'title' => 'tag2',
        'slug' => 'slug2',
    ],
    [
        'title' => 'tag3',
        'slug' => 'slug3',
    ],
    [
        'title' => 'tag4',
        'slug' => 'slug4',
    ],
    [
        'title' => 'tag5',
        'slug' => 'slug5',
    ]
];

foreach ($tags as $tag) {
    Tag::create($tag);
}

$posts = Post::all();

foreach ($posts as $post) {
    $post->tags()->attach(1);
    $post->tags()->attach(2);
    $post->tags()->attach(3);
};
