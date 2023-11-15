<?php
/**
 * Template Name: Search
 */

get_header();
?>
<div class="Search-container">
    <div class="search-query">
        <div class="search-title1"><?php _e( 'Search results for: ', 'esgi' ); echo get_search_query(); ?></br></br></div>
        <div class="container">
            <div class="row">
                <div class="search-results-container">
                    <?php if ( have_posts() ): ?>
                        <?php while( have_posts() ): ?>
                            <?php the_post(); ?>
                            <div class="search-result">
                                <div class="post-title"><?php the_title(); ?></br></br></div>
                                <div class="post-date">
                                    <?php
                                        $categories = get_the_category();
                                        if ($categories) {
                                            foreach ($categories as $category) {
                                                echo esc_html($category->name);
                                                echo ', ';
                                            }
                                        };
                                        echo get_the_date('F j, Y');
                                    ?>
                                </div>
                                <div class="post-excerpt"><?php the_excerpt(); ?></div>
                            </div>
                        <?php endwhile; ?>
                        <?php the_posts_pagination(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>


