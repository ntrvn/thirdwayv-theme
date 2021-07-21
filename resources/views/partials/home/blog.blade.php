<section class="wrapper" id="blogs-screen">
    <section class="">
        {!! get_field("blog_and_news_title") !!}
    </section>

    <div class="blogs-page-carousel">

        @php
            $index = 0;
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
                    'type' => get_field('type', $post),
                    'id' => $post->ID,
                ];
            });
        @endphp

        @foreach ($blogs as $blog)
            @php
                $id = preg_replace('/\s+/', '', $blog->title);
                $href = '/blogs?post-id=' . $index
            @endphp
            <div class="blogs-carousel-item" id="{{ $id }}" style="text-align: left">
                <img src="<?php echo esc_url($blog->image['url']); ?>" class="blog-carousel-image"/>
                <div class="row">
                    <div class="col-8">
                        <p class="blue" style="margin-bottom: 0">{{ $blog->type }}</p>
                        <p class="grey2" style="margin-bottom: 0">{{ $blog->title }}</p>
                        <p class="blue" style="margin-bottom: 0">{{ $blog->date }}</p>
                    </div>
                    <div class="col-4 blog-carousel-know-more-btn">
                        <a href="<?php echo $href ?>">    
                            <button class="btn leaders-btn">
                                Know More
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            @php
                $index+=1
            @endphp
        @endforeach
    </div>

</section>