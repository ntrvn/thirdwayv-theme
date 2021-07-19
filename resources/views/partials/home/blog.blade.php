<section class="wrapper" id="blogs-screen">
    <section class="">
        {!! get_field("blog_and_news_title") !!}
    </section>

    <div class="blogs-page-carousel">

        @php
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
        @endphp


        @foreach ($blogs as $blog)
            @php
                $id = preg_replace('/\s+/', '', $blog->title);
            @endphp
            <div class="blogs-carousel-item" id="{{ $id }}" style="text-align: left">
                <img src="<?php echo esc_url($blog->image['url']); ?>" class="blog-carousel-image"/>
                <p class="blue" style="margin-bottom: 0">{{ $blog->type }}</p>
                <p class="grey2" style="margin-bottom: 0">{{ $blog->title }}</p>
                <p class="blue" style="margin-bottom: 0">{{ $blog->date }}</p>
            </div>
        @endforeach
    </div>

</section>