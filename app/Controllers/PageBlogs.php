<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageBlogs extends Controller {
    public function blogs() {

        $blogs = collect(get_posts([
            'post_per_page' => -1,
            'offset' => 0,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'blogs-news'
        ]))->map(function ($post) {
            return (object) [
                'title' => get_field('title', $post),
                'image' => get_field('image', $post),
                'detail' => get_field('detail', $post),
                'date' => get_field('date', $post),
                'type' => get_field('type', $post)
            ];
        });

        return $blogs;

    }
}