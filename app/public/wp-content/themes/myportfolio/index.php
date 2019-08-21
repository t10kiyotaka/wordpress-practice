<?php get_header(); ?>
<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="l-container is-flex">
            <div class="l-contents">
                <?php if(is_home()): ?>
                    <h1 class="archive_title">BLOG</h1>
                <?php else: ?>
                    <?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
                <?php endif; ?>
                <div class="c-post-archive">
                    <?php if(have_posts()): ?>
                        <?php while (have_posts()): ?>
                            <?php the_post(); ?>
                            <!-- ▼ 投稿 : 開始-->
                            <article <?php post_class(); ?>>
                                <div class="hentry-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo esc_url( get_theme_file_uri('images/img-default.png') ); ?>" alt="">
                                    </a>
                                </div>
                                <div class="hentry-content">
                                    <header class="entry-header">
                                        <div class="entry-meta">
                                            <a href="<?php the_permalink(); ?>">
                                                <time class="entry-date published">
                                                    <?php the_time('Y年n月j日'); ?>
                                                </time>
                                            </a>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                    </header>
                                    <div class="entry-content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <footer class="entry-footer">
                                        <span class="cat-tags-links">
                                            <span class="cat-links">
                                                <?php the_category('&nbsp;'); ?>
                                            </span>
                                            <span class="tags-links">
                                                <?php the_tags('<span class="tags-links">', '&nbsp;', '</span>'); ?>
                                            </span> 
                                        </span>
                                    </footer>
                                </div>
                            </article>
                            <!-- ▲ 投稿 : 終了-->
                        <?php endwhile; ?>

                        <!--▼ ページネーション : 開始-->
                        <?php the_posts_pagination(); ?>
                        <!--▲ ページネーション : 終了-->
                    <?php else: ?>
                        <p>No content yet.</p>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Side bar -->
            <?php get_sidebar(); ?>

        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了-->

<!-- Footer -->
<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>
