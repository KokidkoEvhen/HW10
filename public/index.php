<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use Hillel\Models\Category;
use Hillel\Models\Post;
use Hillel\Models\Tag;

//Create categories
$categories = [];

for ($i = 1; $i <= 5; $i++) {
    $categories[] = [
        'title' => 'Category' . $i,
        'slug' => 'category-' . $i
    ];
}

foreach ($categories as $category) {
    \Hillel\Models\Category::create($category);
}

//Change random category
$category = Category::inRandomOrder()->first();
$category->title = 'Some new title';
$category->save();

//Delete random category
$category = Category::inRandomOrder()->first();
$category->delete();

//Create posts
$posts = [];
$categories = \Hillel\Models\Category::all();

for ($i = 1; $i <= 5; $i++) {
    $posts[] = [
        'title' => 'Post' . $i,
        'slug' => 'post-' . $i,
        'body' => 'Body of post ' . $i,
        'category_id' => $categories->random()->id
    ];
}

foreach ($posts as $post) {
    \Hillel\Models\Post::create($post);
}

//Change random post
$post = Post::inRandomOrder()->first();
$post->title = 'New title';
$post->category_id = $categories->random()->id;
$post->save();

//Create tags
$tags = [];

for ($i = 1; $i <= 5; $i++) {
    $tags[] = [
        'title' => 'Tag' . $i,
        'slug' => 'tag-' . $i
    ];
}

foreach ($tags as $tag) {
    \Hillel\Models\Tag::create($tag);
}

//Assign 3 random tags for each post
$tags = \Hillel\Models\Tag::all();
$posts = \Hillel\Models\Post::all();

foreach ($posts as $post) {
    $tagsId = $tags->pluck('id')->random(3);
    $post->tags()->sync($tagsId);
}
