<?php get_header(); ?>

<div class="container">
    <h2>نتایج جستجو برای: <?php echo get_search_query(); ?></h3>

    <?php
    $search_query = get_search_query();
    
    if (empty($search_query)) {
        echo '<p>لطفاً یک عبارت برای جستجو وارد کنید.</p>';
    } 
    else {
        $args = array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            's'              => $search_query,
            'posts_per_page' => 10,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <ul class="search-list">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <li style="list-style-type: none;">
                        <div class="card text-center" style="width: 18rem;">
                            <img src="<?php 
                                if(the_post_thumbnail()){
                                    echo the_post_thumbnail();
                                }
                                else{
                                    echo get_template_directory_uri().'/img/broken-img.png';
                                }
                            ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn show-post-btn-in-search">دیدن نوشته</a>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total'     => $query->max_num_pages,
                    'prev_text' => '« قبلی',
                    'next_text' => 'بعدی »',
                ));
                ?>
            </div>
        <?php else : ?>
            <p>متأسفیم! نتیجه‌ای برای جستجوی شما یافت نشد.</p>
        <?php endif;
        wp_reset_postdata();
    }
    ?>
</div>

<?php get_footer(); ?>