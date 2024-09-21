<?php get_header(); ?>

<div class="site-wrap clearfix">
    <div class="site-content single-1 rbc-content-section clearfix has-sidebar is-sidebar-right active-sidebar">
        <div class="wrap rbc-container rb-p20-gutter">
            <div class="rbc-wrap clearfix">
                <main id="main" class="site-main rbc-content">
                    <div class="single-content-wrap">
                        <article id="post-7492"
                            class="post-7492 post type-post status-publish format-standard has-post-thumbnail category-bedroom tag-comforter tag-duvet-cover"
                            itemscope="" itemtype="http://schema.org/Article">
                            <header class="single-header entry-header">
                                <aside id="site-breadcrumb" class="breadcrumb breadcrumb-navxt">
                                    <!-- Breadcrumbs -->
                                    <div class="breadcrumbs">
                                        <?php custom_breadcrumbs(); ?>
                                    </div>
                                </aside>
                                <aside class="p-cat-info is-relative single-cat-info">
                                    <?php 
                                        // Display category info
                                        // custom_category_info();
                                    ?>
                                    <a class="cat-info-el cat-info-id-1011"
                                        href="http://localhost/homoper/category/home-design-and-decorating/room-designs/bedroom/"
                                        rel="category">Bedroom</a>
                                </aside>
                                <h1 itemprop="headline" class="single-title entry-title"><?php echo get_the_title(); ?></h1>
                                <div class="single-entry-meta has-avatar small-size">
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
                                <div class="single-feat">
                                    <div class="rb-iwrap lazy-loaded">
                                        <?php if (has_post_thumbnail()): ?>
                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>"></a>
                                        <?php else: ?>
                                            <img src="default-image.jpg" alt="Default Image"> <!-- Placeholder image -->
                                        <?php endif; ?>
                                    </div>

                                    <span class="image-caption is-overlay"><?php echo get_the_title(); ?></span>
                                </div>
                            </header>
                            <div class="single-body entry">
                                <div class="single-content has-left-section">
                                    <aside class="single-left-section">
                                        <div class="section-inner">
                                            <aside class="single-left-share is-light-share">
                                                <div class="share-header"> <span class="share-label">Share
                                                        on</span>
                                                </div>
                                                <!-- Share social -->
                                                <?php custom_social_share_buttons(); ?>
                                            </aside>
                                            <div class="single-left-article">
                                                <?php 
                                                $next_post = get_next_post();
                                                if ( ! empty( $next_post ) ) : 
                                                    // Get the post URL
                                                    $next_post_url = get_permalink( $next_post->ID );

                                                    // Get the post title
                                                    $next_post_title = get_the_title( $next_post->ID );

                                                    // Get the post thumbnail
                                                    $next_post_thumbnail = get_the_post_thumbnail( $next_post->ID, 'thumbnail' ); 
                                                ?>
                                                <span class="left-article-label">READ NEXT</span>
                                                <div class="p-feat">
                                                    <a class="p-flink" href="<?php echo esc_url( $next_post_url ); ?>" title="<?php echo esc_attr( $next_post_title ); ?>">
                                                        <span class="rb-iwrap pc-75 lazy-loaded">
                                                            <?php echo $next_post_thumbnail; // Display the post thumbnail ?>
                                                        </span>
                                                    </a>
                                                </div>
                                                <h6 class="entry-title">
                                                    <a class="p-url" href="<?php echo esc_url( $next_post_url ); ?>" title="<?php echo esc_attr( $next_post_title ); ?>">
                                                        <?php echo esc_html( $next_post_title ); ?>
                                                    </a>
                                                </h6>
                                                <?php endif; ?>
                                            </div>

                                        </div>
                                    </aside>
                                    <!-- Singe post Content -->
                                    <div class="entry-content clearfix" itemprop="articleBody">
                                        <?php 
                                            // Display community single post content function
                                            the_content(); 
                                        ?>
                                        <!-- <aside class="like-box clearfix">
                                            <div class="like-el fb-like">
                                                <iframe
                                                    src="./What is Duvet &amp; How to Choose a Quality Duvet Cover__files/like.html"
                                                    style="border:none; overflow:hidden; width:105px; height:21px; background-color:transparent;"></iframe>
                                            </div>
                                            <div class="like-el twitter-like twitter-share-button">
                                                <iframe id="twitter-widget-0" scrolling="no" frameborder="0"
                                                    allowtransparency="true" allowfullscreen="true"
                                                    class="twitter-share-button twitter-share-button-rendered twitter-tweet-button"
                                                    title="X Post Button"
                                                    src="./What is Duvet &amp; How to Choose a Quality Duvet Cover__files/tweet_button.2f70fb173b9000da126c79afe2098f02.en.html"
                                                    style="position: static; visibility: visible; width: 65px; height: 20px;"
                                                    data-url="http://localhost/homoper/what-is-duvet-and-how-to-choose-a-quality-duvet-cover/"></iframe>
                                                <script>window.twttr = (function (d, s, id) {
                                                        var js, fjs = d.getElementsByTagName(s)[0],
                                                            t = window.twttr || {};
                                                        if (d.getElementById(id)) return t;
                                                        js = d.createElement(s);
                                                        js.id = id;
                                                        js.src = "https://platform.twitter.com/widgets.js";
                                                        fjs.parentNode.insertBefore(js, fjs);

                                                        t._e = [];
                                                        t.ready = function (f) {
                                                            t._e.push(f);
                                                        };

                                                        return t;
                                                    }(document, "script", "twitter-wjs"));</script>
                                            </div>
                                        </aside> -->
                                    </div>
                                </div>
                                <!-- Bookmark -->
                                <aside class="is-hidden rb-remove-bookmark" data-bookmarkid="7492"></aside>
                                <div class="entry-footer">
                                    <div class="inner">
                                        <div class="single-post-tag tags">
                                            <span class="tag-label">Tags:</span>
                                            <?php 
                                            // Display post tags
                                            the_tags('', ', ', '');
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <aside class="single-bottom-share">
                                    <div class="share-header">
                                        <span class="share-label">Share on</span>
                                    </div>
                                    <div class="share-content is-light-share tooltips-n">
                                        <a class="share-action share-icon share-facebook" rel="nofollow"
                                        href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
                                        original-title="Facebook">
                                            <i class="rbi rbi-facebook"></i><span>Share on Facebook</span>
                                        </a>
                                        <a class="share-action share-twitter share-icon" rel="nofollow"
                                        href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()); ?>&amp;url=<?php echo urlencode(get_permalink()); ?>"
                                        original-title="Twitter">
                                            <i class="rbi rbi-twitter"></i><span>Share on Twitter</span>
                                        </a>
                                        <a class="share-action share-icon share-pinterest" rel="nofollow"
                                        href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink()); ?>&amp;media=<?php echo urlencode(get_the_post_thumbnail_url()); ?>&amp;description=<?php echo urlencode(get_the_excerpt()); ?>"
                                        original-title="Pinterest">
                                            <i class="rbi rbi-pinterest"></i><span>Share on Pinterest</span>
                                        </a>
                                        <a class="share-action share-icon share-linkedin" rel="nofollow"
                                        href="http://linkedin.com/shareArticle?mini=true&amp;url=<?php echo urlencode(get_permalink()); ?>&amp;title=<?php echo urlencode(get_the_title()); ?>"
                                        original-title="LinkedIn">
                                            <i class="rbi rbi-linkedin"></i><span>Share on LinkedIn</span>
                                        </a>
                                        <a class="share-action share-icon share-reddit" rel="nofollow"
                                        href="http://www.reddit.com/submit?url=<?php echo urlencode(get_permalink()); ?>&amp;title=<?php echo urlencode(get_the_title()); ?>"
                                        original-title="Reddit">
                                            <i class="rbi rbi-reddit"></i><span>Share on Reddit</span>
                                        </a>
                                    </div>
                                </aside>

                            </div>
                            <div class="article-meta">
                                <meta itemprop="mainEntityOfPage" content="<?php echo esc_url(get_permalink()); ?>">
                                <span class="vcard author" itemprop="author" content="<?php the_author(); ?>">
                                    <span class="fn"><?php the_author(); ?></span>
                                </span>
                                <time class="date published entry-date" datetime="<?php echo get_the_date('c'); ?>"
                                    content="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
                                    <?php echo get_the_date(); ?>
                                </time>
                                <meta class="updated" itemprop="dateModified" content="<?php echo get_the_modified_date('c'); ?>">
                                <span itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                                    <meta itemprop="url" content="<?php echo esc_url(get_the_post_thumbnail_url()); ?>">
                                    <meta itemprop="width" content="640">
                                    <meta itemprop="height" content="1138">
                                </span>
                                <span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
                                    <meta itemprop="name" content="Homoper">
                                    <meta itemprop="url" content="<?php echo esc_url(home_url('/')); ?>">
                                    <span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
                                        <meta itemprop="url" content="<?php echo esc_url(home_url('/')); ?>">
                                    </span>
                                </span>
                            </div>

                        </article>
                        <div class="single-box clearfix">
                            <div class="author-box">
                                <div class="author-avatar">
                                    <a href="http://localhost/homoper/author/alexander/"><img alt="Alexander James"
                                            src="./What is Duvet &amp; How to Choose a Quality Duvet Cover__files/c06832ff30bc2e43a641e498680e938b(1).png"
                                            srcset="http://0.gravatar.com/avatar/c06832ff30bc2e43a641e498680e938b?s=200&amp;d=mm&amp;r=g 2x"
                                            class="avatar avatar-100 photo" height="100" width="100" loading="lazy"
                                            decoding="async"></a>
                                </div>
                                <div class="author-content">
                                    <div class="author-header">
                                        <div class="author-title">
                                            <a class="h5" href="http://localhost/homoper/author/alexander/">Alexander
                                                James</a>
                                        </div>
                                        <span class="author-more block-view-more"><a
                                                href="http://localhost/homoper/author/alexander/">View More
                                                Posts <i class="rbi rbi-arrow-right"></i></a></span>
                                    </div>
                                    <div class="author-description">Alexander James is the founder of
                                        Homoper.com. The blog focuses on various topics, including home
                                        improvement, decor, design, gardening, and real estate. With
                                        extensive knowledge and experience in these areas, he is passionate
                                        about sharing his expertise with others to assist them in creating a
                                        more comfortable and beautiful living space. Follow his blog to
                                        learn practical tips and find inspiration for enhancing both your
                                        home and garden.</div>
                                    <div class="author-footer">
                                        <div class="author-social tooltips-n tipsy-loaded"><a
                                                class="social-link-website" href="http://localhost/homoper/"
                                                target="_blank" rel="noopener nofollow" original-title="Website"><i
                                                    class="rbi rbi-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="single-post-box box-nav rb-n20-gutter">
                                <div class="nav-el nav-left rb-p20-gutter">
                                    <a
                                        href="http://localhost/homoper/maximizing-space-functional-and-stylish-home-interior-ideas-for-airbnb-in-2024/">
                                        <span class="nav-label"><i class="rbi rbi-angle-left"></i><span>Previous
                                                Article</span></span>
                                        <span class="nav-inner h4">
                                            <img width="150" height="150"
                                                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                data-src="http://localhost/homoper/wp-content/uploads/2022/12/home-interior-design-150x150.jpg"
                                                class="rb-lazyload rb-autosize attachment-thumbnail size-thumbnail wp-post-image"
                                                alt="Home interior design" decoding="async" loading="lazy"
                                                sizes="346.625px"> <span class="nav-title p-url">Maximizing
                                                Space: Functional and Stylish Home Interior Ideas for AirBnB
                                                in 2024</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="nav-el nav-right rb-p20-gutter">
                                    <a href="http://localhost/homoper/design-ideas-for-your-gutter-drainage-systems/">
                                        <span class="nav-label"><span>Next Article</span><i
                                                class="rbi rbi-angle-right"></i></span>
                                        <span class="nav-inner h4">
                                            <img width="150" height="150"
                                                src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                data-src="http://localhost/homoper/wp-content/uploads/2024/01/gutter-drainage-system-design-150x150.jpg"
                                                class="rb-lazyload rb-autosize attachment-thumbnail size-thumbnail wp-post-image"
                                                alt="Gutter drainage system design" decoding="async" loading="lazy"
                                                sizes="346.625px"> <span class="nav-title p-url">10 Effective Design
                                                Ideas for Your
                                                Gutter Drainage Systems</span>
                                        </span>
                                    </a>
                                </div>
                            </nav>
                            <aside id="rb-user-reviews-7492" class="comment-box-wrap rb-user-reviews">
                                <div class="comment-box-header clearfix">
                                    <h4 class="h3"><i class="rbi rbi-star-full"></i>Leave a Review</h4>
                                </div>
                                <div id="comments" class="comments-area rb-reviews-area">
                                    <div class="comment-box-content rb-reviews-form clearfix is-loaded">
                                        <div id="respond" class="comment-respond">
                                            <h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow"
                                                        id="cancel-comment-reply-link"
                                                        href="http://localhost/homoper/what-is-duvet-and-how-to-choose-a-quality-duvet-cover/#respond"
                                                        style="display:none;">Cancel reply</a></small></h3>
                                            <form action="http://localhost/homoper/wp-comments-post.php" method="post"
                                                id="commentform" class="comment-form" novalidate="">
                                                <p class="logged-in-as">Logged in as Arifur Rahman. <a
                                                        href="http://localhost/homoper/wp-admin/profile.php">Edit
                                                        your profile</a>. <a
                                                        href="http://localhost/homoper/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Flocalhost%2Fhomoper%2Fwhat-is-duvet-and-how-to-choose-a-quality-duvet-cover%2F&amp;_wpnonce=61cffc5150">Log
                                                        out?</a> <span class="required-field-message">Required fields
                                                        are
                                                        marked <span class="required">*</span></span></p>
                                                <div class="rb-form-rating">
                                                    <span class="rating-alert is-hidden">Please select a
                                                        rating</span>
                                                    <label id="rating-7492">Your rating</label>
                                                    <div class="rb-review-stars"> <span> <a class="star" data-rating="1"
                                                                href="http://localhost/homoper/what-is-duvet-and-how-to-choose-a-quality-duvet-cover/#"><i
                                                                    class="rbi rbi-star"></i></a> <a class="star"
                                                                data-rating="2"
                                                                href="http://localhost/homoper/what-is-duvet-and-how-to-choose-a-quality-duvet-cover/#"><i
                                                                    class="rbi rbi-star"></i></a> <a class="star"
                                                                data-rating="3"
                                                                href="http://localhost/homoper/what-is-duvet-and-how-to-choose-a-quality-duvet-cover/#"><i
                                                                    class="rbi rbi-star"></i></a> <a class="star"
                                                                data-rating="4"
                                                                href="http://localhost/homoper/what-is-duvet-and-how-to-choose-a-quality-duvet-cover/#"><i
                                                                    class="rbi rbi-star"></i></a> <a class="star"
                                                                data-rating="5"
                                                                href="http://localhost/homoper/what-is-duvet-and-how-to-choose-a-quality-duvet-cover/#"><i
                                                                    class="rbi rbi-star"></i></a> </span>
                                                    </div><select name="rbrating" id="rating-7492"
                                                        class="rb-rating-selection" style="display: none;">
                                                        <option value="">Rate…</option>
                                                        <option value="5">Perfect</option>
                                                        <option value="4">Good</option>
                                                        <option value="3">Average</option>
                                                        <option value="2">Not that bad</option>
                                                        <option value="1">Very poor</option>
                                                    </select>
                                                </div>
                                                <p class="comment-form-comment"><label for="comment">Your
                                                        review&nbsp;<span class="required">*</span></label><textarea
                                                        id="comment" name="comment" placeholder="Leave Your Review"
                                                        cols="45" rows="8" required=""></textarea></p>
                                                <div class="c4wp_captcha_field" style="margin-bottom: 10px;"
                                                    data-nonce="f3864ab0ae">
                                                    <div id="c4wp_captcha_field_1" class="c4wp_captcha_field_div"><input
                                                            type="hidden" name="g-recaptcha-response"
                                                            class="c4wp_response" aria-label="do not use"
                                                            aria-readonly="true" value=""></div>
                                                </div>
                                                <p class="form-submit"><input name="submit" type="submit" id="submit"
                                                        class="submit c4wp-submit" value="Post Review"><input
                                                        name="submit" type="submit" id="submit" class="submit"
                                                        value="Post Review" style="display: none;"> <input type="hidden"
                                                        name="comment_post_ID" value="7492" id="comment_post_ID">
                                                    <input type="hidden" name="comment_parent" id="comment_parent"
                                                        value="0">
                                                </p>
                                                <p style="display: none;"><input type="hidden"
                                                        id="akismet_comment_nonce" name="akismet_comment_nonce"
                                                        value="65a0410491"></p>
                                                <input type="hidden" id="_wp_unfiltered_html_comment_disabled"
                                                    name="_wp_unfiltered_html_comment" value="b76aae4f0c">
                                                <script>
                                                    (function () { if (window === window.parent) { document.getElementById('_wp_unfiltered_html_comment_disabled').name = '_wp_unfiltered_html_comment'; } })();
                                                </script>
                                                <p style="display: none !important;" class="akismet-fields-container"
                                                    data-prefix="ak_">
                                                    <label>Δ<textarea name="ak_hp_textarea" cols="45" rows="8"
                                                            maxlength="100"></textarea></label><input type="hidden"
                                                        id="ak_js_1" name="ak_js" value="1726761834167">
                                                    <script>document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());</script>
                                                </p>
                                            </form>
                                        </div><!-- #respond -->
                                    </div>
                                </div>
                            </aside>
                        </div>

                    </div>
                </main>
                <aside class="rbc-sidebar widget-area sidebar-sticky">
                    <div class="sidebar-inner"
                        style="width: 336.625px; position: fixed; top: auto; bottom: 0px; z-index: 100;">
                        <div id="sb_post-1" class="widget w-sidebar widget-post">
                            <h2 class="widget-title h4">Gardening</h2>
                            <div class="widget-post-content">
                                <div class="rb-row widget-post-1">
                                    <div class="rb-col-m12">
                                        <div class="p-wrap p-list p-list-4 post-8021 no-avatar">
                                            <div class="col-left">
                                                <div class="p-feat">
                                                    <a class="p-flink"
                                                        href="http://localhost/homoper/acacia-woods-uses-durability-pros-cons/"
                                                        title="Acacia Woods: Uses, Durability, Pros &amp; Cons">
                                                        <span class="rb-iwrap pc-75 lazy-loaded"><img width="280"
                                                                height="210"
                                                                src="./What is Duvet &amp; How to Choose a Quality Duvet Cover__files/Acacia-Wood-280x210.png"
                                                                data-src="http://localhost/homoper/wp-content/uploads/2024/04/Acacia-Wood-280x210.png"
                                                                class="rb-lazyload rb-autosize attachment-pixwell_280x210 size-pixwell_280x210 wp-post-image loaded"
                                                                alt="" decoding="async" loading="lazy"
                                                                data-srcset="http://localhost/homoper/wp-content/uploads/2024/04/Acacia-Wood-280x210.png 280w, http://localhost/homoper/wp-content/uploads/2024/04/Acacia-Wood-560x420.png 560w"
                                                                data-sizes="(max-width: 280px) 100vw, 280px"
                                                                sizes="80px"
                                                                srcset="http://localhost/homoper/wp-content/uploads/2024/04/Acacia-Wood-280x210.png 280w, http://localhost/homoper/wp-content/uploads/2024/04/Acacia-Wood-560x420.png 560w"></span>
                                                    </a>
                                                    <a class="post-edit-link"
                                                        href="http://localhost/homoper/wp-admin/post.php?post=8021&amp;action=edit&amp;classic-editor">edit</a>
                                                </div>
                                            </div>
                                            <div class="col-right">
                                                <div class="p-header">
                                                    <h4 class="entry-title h6"> <a class="p-url"
                                                            href="http://localhost/homoper/acacia-woods-uses-durability-pros-cons/"
                                                            rel="bookmark"
                                                            title="Acacia Woods: Uses, Durability, Pros &amp; Cons">Acacia
                                                            Woods: Uses, Durability, Pros &amp; Cons</a>
                                                    </h4>
                                                </div>
                                                <div class="p-footer">
                                                    <aside class="p-meta-info"> <span
                                                            class="meta-info-el meta-info-date">
                                                            <i class="rbi rbi-clock"></i> <abbr class="date published"
                                                                title="2024-04-16T07:14:45+00:00">April 16,
                                                                2024</abbr>
                                                        </span>
                                                    </aside>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rb-col-m12">
                                        <div class="p-wrap p-list p-list-4 post-5104 no-avatar">
                                            <div class="col-left">
                                                <div class="p-feat">
                                                    <a class="p-flink"
                                                        href="http://localhost/homoper/dallas-craigslist-farm-and-garden/"
                                                        title="Dallas Craigslist Farm and Garden: Everything You Should Know">
                                                        <span class="rb-iwrap pc-75 lazy-loaded"><img width="280"
                                                                height="210"
                                                                src="./What is Duvet &amp; How to Choose a Quality Duvet Cover__files/Dallas-Craigslist-farm-and-garden-280x210.png"
                                                                data-src="http://localhost/homoper/wp-content/uploads/2023/05/Dallas-Craigslist-farm-and-garden-280x210.png"
                                                                class="rb-lazyload rb-autosize attachment-pixwell_280x210 size-pixwell_280x210 wp-post-image loaded"
                                                                alt="Dallas Craigslist farm and garden" decoding="async"
                                                                loading="lazy" sizes="80px"></span>
                                                    </a>
                                                    <a class="post-edit-link"
                                                        href="http://localhost/homoper/wp-admin/post.php?post=5104&amp;action=edit&amp;classic-editor">edit</a>
                                                </div>
                                            </div>
                                            <div class="col-right">
                                                <div class="p-header">
                                                    <h4 class="entry-title h6"> <a class="p-url"
                                                            href="http://localhost/homoper/dallas-craigslist-farm-and-garden/"
                                                            rel="bookmark"
                                                            title="Dallas Craigslist Farm and Garden: Everything You Should Know">Dallas
                                                            Craigslist Farm and Garden: Everything You
                                                            Should Know</a>
                                                    </h4>
                                                </div>
                                                <div class="p-footer">
                                                    <aside class="p-meta-info"> <span
                                                            class="meta-info-el meta-info-date">
                                                            <i class="rbi rbi-clock"></i> <abbr class="date published"
                                                                title="2023-05-02T18:08:35+00:00">May 2,
                                                                2023</abbr>
                                                        </span>
                                                    </aside>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rb-col-m12">
                                        <div class="p-wrap p-list p-list-4 post-5065 no-avatar">
                                            <div class="col-left">
                                                <div class="p-feat">
                                                    <a class="p-flink"
                                                        href="http://localhost/homoper/how-to-roll-up-a-garden-hose-on-a-reel/"
                                                        title="How To Roll Up A Garden Hose On A Reel?">
                                                        <span class="rb-iwrap pc-75 lazy-loaded"><img width="280"
                                                                height="210"
                                                                src="./What is Duvet &amp; How to Choose a Quality Duvet Cover__files/Garden-hose-reel-280x210.png"
                                                                data-src="http://localhost/homoper/wp-content/uploads/2023/04/Garden-hose-reel-280x210.png"
                                                                class="rb-lazyload rb-autosize attachment-pixwell_280x210 size-pixwell_280x210 wp-post-image loaded"
                                                                alt="Garden hose reel" decoding="async" loading="lazy"
                                                                data-srcset="http://localhost/homoper/wp-content/uploads/2023/04/Garden-hose-reel-280x210.png 280w, http://localhost/homoper/wp-content/uploads/2023/04/Garden-hose-reel-560x420.png 560w"
                                                                data-sizes="(max-width: 280px) 100vw, 280px"
                                                                sizes="80px"
                                                                srcset="http://localhost/homoper/wp-content/uploads/2023/04/Garden-hose-reel-280x210.png 280w, http://localhost/homoper/wp-content/uploads/2023/04/Garden-hose-reel-560x420.png 560w"></span>
                                                    </a>
                                                    <a class="post-edit-link"
                                                        href="http://localhost/homoper/wp-admin/post.php?post=5065&amp;action=edit&amp;classic-editor">edit</a>
                                                </div>
                                            </div>
                                            <div class="col-right">
                                                <div class="p-header">
                                                    <h4 class="entry-title h6"> <a class="p-url"
                                                            href="http://localhost/homoper/how-to-roll-up-a-garden-hose-on-a-reel/"
                                                            rel="bookmark"
                                                            title="How To Roll Up A Garden Hose On A Reel?">How
                                                            To Roll Up A Garden Hose On A Reel?</a>
                                                    </h4>
                                                </div>
                                                <div class="p-footer">
                                                    <aside class="p-meta-info"> <span
                                                            class="meta-info-el meta-info-date">
                                                            <i class="rbi rbi-clock"></i> <abbr class="date published"
                                                                title="2023-04-28T17:08:48+00:00">April 28,
                                                                2023</abbr>
                                                        </span>
                                                    </aside>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rb-col-m12">
                                        <div class="p-wrap p-list p-list-4 post-3891 no-avatar">
                                            <div class="col-left">
                                                <div class="p-feat">
                                                    <a class="p-flink"
                                                        href="http://localhost/homoper/buying-pots-for-indoor-plants/"
                                                        title="Things to Look for When Buying Pots for Indoor Plants">
                                                        <span class="rb-iwrap pc-75 lazy-loaded"><img width="280"
                                                                height="210"
                                                                src="./What is Duvet &amp; How to Choose a Quality Duvet Cover__files/pot-for-indoor-plants-280x210.jpg"
                                                                data-src="http://localhost/homoper/wp-content/uploads/2022/12/pot-for-indoor-plants-280x210.jpg"
                                                                class="rb-lazyload rb-autosize attachment-pixwell_280x210 size-pixwell_280x210 wp-post-image loaded"
                                                                alt="Pot for indoor plants" decoding="async"
                                                                loading="lazy"
                                                                data-srcset="http://localhost/homoper/wp-content/uploads/2022/12/pot-for-indoor-plants-280x210.jpg 280w, http://localhost/homoper/wp-content/uploads/2022/12/pot-for-indoor-plants-560x420.jpg 560w"
                                                                data-sizes="(max-width: 280px) 100vw, 280px"
                                                                sizes="80px"
                                                                srcset="http://localhost/homoper/wp-content/uploads/2022/12/pot-for-indoor-plants-280x210.jpg 280w, http://localhost/homoper/wp-content/uploads/2022/12/pot-for-indoor-plants-560x420.jpg 560w"></span>
                                                    </a>
                                                    <a class="post-edit-link"
                                                        href="http://localhost/homoper/wp-admin/post.php?post=3891&amp;action=edit&amp;classic-editor">edit</a>
                                                </div>
                                            </div>
                                            <div class="col-right">
                                                <div class="p-header">
                                                    <h4 class="entry-title h6"> <a class="p-url"
                                                            href="http://localhost/homoper/buying-pots-for-indoor-plants/"
                                                            rel="bookmark"
                                                            title="Things to Look for When Buying Pots for Indoor Plants">Things
                                                            to Look for When Buying Pots for Indoor
                                                            Plants</a>
                                                    </h4>
                                                </div>
                                                <div class="p-footer">
                                                    <aside class="p-meta-info"> <span
                                                            class="meta-info-el meta-info-date">
                                                            <i class="rbi rbi-clock"></i> <abbr class="date published"
                                                                title="2022-12-27T15:18:07+00:00">December
                                                                27, 2022</abbr>
                                                        </span>
                                                    </aside>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="categories-3" class="widget w-sidebar widget_categories">
                            <h2 class="widget-title h4">Categories</h2>
                            <ul>
                                <li class="cat-item cat-item-40"><a
                                        href="http://localhost/homoper/category/apartment/">Apartment</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </aside>
            </div>
        </div>
    </div>
</div>
<style>
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

</style>
<?php get_footer(); ?>