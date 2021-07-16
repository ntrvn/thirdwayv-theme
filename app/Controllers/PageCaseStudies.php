<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageCaseStudies extends Controller {
    public function cases() {

        $cases = collect(get_posts([
            'post_per_page' => -1,
            'offset' => 0,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'case-studies'
        ]))->map(function ($post) {
            return (object) [
                'title' => get_field('title', $post),
                'link' => get_post_permalink($post)
            ];
        });

        return $cases;

    }
}