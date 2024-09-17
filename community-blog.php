<?php
/*
Template Name: Community Blog
*/
get_header(); // Loads the header.php file
?>
<section class="main-header">
    <!-- Breadcrumbs -->
    <!-- <div class="breadcrumbs">
        <?php //custom_breadcrumbs(); ?>
    </div> -->

    <h2><?php echo get_the_title(); ?></h2>
</section>
<div class="main-content">
    <section class="latest-news">
        <div class="news-grid">
            <?php
            // Custom WP_Query for community_post post type with pagination support
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $community_query = new WP_Query(array(
                'post_type' => 'community_post', // Your custom post type
                'posts_per_page' => 9, // Number of posts to display
                'paged' => $paged, // Enable pagination
            ));

            if ($community_query->have_posts()):
                while ($community_query->have_posts()):
                    $community_query->the_post();
                    ?>
                    <article>
                        <?php if (has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>"></a>
                        <?php else: ?>
                            <img src="default-image.jpg" alt="Default Image"> <!-- Placeholder image -->
                        <?php endif; ?>

                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                        <div class="p-footer">
                            <aside class="p-meta-info">
                                <!-- Author Information -->
                                <span class="meta-info-el meta-info-author">
                                    <span class="meta-avatar">
                                        <?php echo get_avatar(get_the_author_meta('ID'), 32); ?> <!-- Displays author avatar -->
                                    </span>
                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                        <?php the_author(); ?>
                                    </a>
                                </span>

                                <!-- Publish Date -->
                                <span class="meta-info-el meta-info-date">
                                    <i class="rbi rbi-clock"></i> 
                                    <abbr class="date published" title="<?php echo get_the_date('c'); ?>">
                                        <?php echo get_the_date(); ?>
                                    </abbr>
                                </span>
                            </aside>
                        </div>
                    </article>
                    <?php
                endwhile;
            else:
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total' => $community_query->max_num_pages,
                'prev_text' => __('<'),
                'next_text' => __('>'),
            ));
            ?>
        </div>

        <?php wp_reset_postdata(); // Restore original Post Data ?>
    </section>
</div>

<!-- Custom CSS for Responsiveness -->
<style>
    /* General Styling */
    .main-header {
        text-align: center;
        margin-bottom: 30px !important;
        margin-top: 50px !important;
        width: 100%;
        max-width: 70%;
        margin: auto;
    }

    .main-content {
        margin: auto;
        width: 100%;
        max-width: 70%;
    }

    /* News Grid */
    .news-grid {
        display: flex;
        flex-wrap: wrap;
        column-gap: 10px;
        row-gap: 20px;
        padding-bottom: 30px;
        justify-content: center;
    }

    /* Article Card */
    .news-grid article {
        width: calc(33.333% - 20px);
        background: #fff;
        margin-bottom: 20px;
    }

    .news-grid img {
        width: 95%;
        height: 250px;
        display: block;
    }

    .news-grid h3 {
        font-size: 22px;
        margin-top: 10px;
        font-family: Cardo, Arial, Helvetica, sans-serif;
    }

    .news-grid h3:hover {
        color: #688da8;
        cursor: pointer;
    }

    .news-grid h3 a:hover {
        text-decoration: underline;
    }

    /* Meta Information */
    .news-grid .p-footer .meta-avatar img {
        height: 25px;
        width: 25px;
    }

    /* Pagination Styling */
    .pagination {
        margin-top: 20px;
        text-align: center;
        margin-bottom: 50px;
    }

    .pagination a,
    .pagination span {
        padding: 5px 8px;
        margin: 0 5px;
        background: #f0f0f0;
        color: #333;
        text-decoration: none;
    }

    .pagination .current {
        background: #333;
        color: #fff;
    }

    /* Breadcrumbs Styling */
    .breadcrumbs {
        margin-bottom: 20px;
        font-size: 14px;
        color: #555;
    }

    .breadcrumbs ul {
        padding: 0;
        list-style: none;
        display: flex;
    }

    .breadcrumbs ul li {
        margin-right: 5px;
    }

    .breadcrumbs ul li a {
        text-decoration: none;
        color: #0073aa;
    }

    .breadcrumbs ul li a:hover {
        text-decoration: underline;
    }

    /* Navbar Border Styling */
    .navbar-border-holder {
        border-bottom: none;
    }

    /* Responsive Adjustments */
    @media (max-width: 1024px) {
        .news-grid article {
            width: calc(50% - 20px);
            /* 2 columns on tablet */
        }

        .main-header,
        .main-content {
            width: 90%;
        }
    }

    @media (max-width: 768px) {
        .news-grid article {
            width: 100%;
            /* Single column on mobile */
        }

        .main-header,
        .main-content {
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        .main-header h2 {
            font-size: 1.8rem;
        }

        .news-grid h3 {
            font-size: 18px;
        }

        .pagination a,
        .pagination span {
            padding: 5px 6px;
        }
    }
</style>

<?php
get_footer(); // Loads the footer.php file
?>
