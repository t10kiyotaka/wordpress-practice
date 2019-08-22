<?php get_header(); ?>
<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="l-container is-flex">
            <div class="l-contents">

            <?php if(have_posts()): ?>

                <?php while(have_posts()): ?>
                <?php the_post(); ?>
                <article <?php post_class(); ?>>
                    <header class="c-post__header">
                        <div class="c-post__meta">
                            <span class="posted-on">
                                <time class="entry-date published">
                                    <?php the_time('Y年n月j日'); ?>
                                </time>
                            </span>
                            <span class="entry-author">
                                投稿者： <?php the_author(); ?>
                            </span>
                        </div>
                        <h1 class="c-post__title">
                            <?php the_title(); ?>
                        </h1>
                    </header>
                    <div class="c-post__content">
                        <?php the_content(); ?>
                    </div>
                    <footer class="c-post__footer">
                        <span class="cat-tags-links">
                            <span class="cat-links">
                                <?php the_category('&nbsp;'); ?>
                            </span>
                            <span class="tags-links">
                                <?php the_tags('<span class="tags-links">', '&nbsp;', '</span>'); ?>
                            </span>
                        </span>
                    </footer>
                </article>
                <?php endwhile; ?>

                <?php the_post_navigation(); ?>
            </div>

            <!-- Side bar -->
            <?php get_sidebar(); ?>

        <?php endif; ?>

        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了-->

<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>
