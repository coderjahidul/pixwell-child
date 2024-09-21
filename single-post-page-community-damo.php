<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()):
            the_post(); ?>

            <div class="single-post">
                <article class="post-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <!-- Breadcrumbs -->
                    <div class="breadcrumbs">
                        <?php custom_breadcrumbs(); ?>
                    </div>

                    <!-- Post Title and Meta -->
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <div class="post-meta">
                            <span class="author"><?php echo get_the_author(); ?></span> |
                            <span class="date"><?php echo get_the_date(); ?></span> |
                            <span class="read-time">10 Min Read</span>
                        </div>
                    </header>

                    <!-- Featured Image -->
                    <?php if (has_post_thumbnail()): ?>
                        <div class="featured-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Post Content -->
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                </article>

                <!-- Related Posts sidebaer -->
                <aside id="secondary" class="widget-area">
                    <?php dynamic_sidebar('sidebar-1'); ?>

                </aside>
            </div>



        <?php endwhile; // End of the loop. ?>
    </main><!-- #main -->
</div><!-- #primary -->
<style>
    .content-area {
        width: 60%;
        margin: 0 auto;
    }
    .single-post {
        display: flex;
    }
    .post-content {
        width: 70%;
    }

    .widget-area {
        width: 30%;
        margin: 0 auto;
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

    /* Post Header */
    .entry-header {
        /* border-bottom: 1px solid #ccc; */
        margin-bottom: 15px;
    }

    .entry-title {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .post-meta {
        font-size: 14px;
        color: #888;
    }

    .post-meta span {
        margin-right: 10px;
    }

    /* Featured Image */
    .featured-image {
        margin-bottom: 20px;
    }

    .featured-image img {
        max-width: 100%;
        height: auto;
    }

    /* Post Content */
    .entry-content {
        font-size: 18px;
        line-height: 1.6;
        color: #333;
        margin-bottom: 20px;
    }

    /* Sidebar */
    .widget-area {
        float: right;
        width: 30%;
        padding: 0 20px;
    }

    .widget-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }
</style>
<?php get_footer(); ?>