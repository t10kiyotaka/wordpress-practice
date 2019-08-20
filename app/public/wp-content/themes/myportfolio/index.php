<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- ▼ ヘッダー : 開始-->
<header class="l-header">
    <div class="c-header-description"><?php bloginfo('description'); ?></div>
    <a class="c-logo" href="<?php echo esc_url( home_url('/') ); ?>">
        <div class="c-logo__image">
            <img src="<?php echo esc_url( get_theme_file_uri('images/logo.png') ); ?>" alt="<?php bloginfo('name'); ?>">
        </div>
        <div class="c-logo__text"><?php bloginfo('name'); ?></div>
    </a>
    <div class="c-global-nav">
        <ul>
            <li>
                <a href="<?php echo esc_url( home_url('/') ); ?>">HOME</a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url('/portfolio/') ); ?>">PROFILE</a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url('/blog/') ); ?>">BLOG</a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url('/contact/') ); ?>">CONTACT</a>
            </li>
        </ul>
    </div>
</header>
<!-- ▲ ヘッダー : 終了-->
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
            <!-- ▼ サイドバー : 開始-->
            <div class="l-aside">
                <div class="c-widget">
                    <h2 class="c-widget__title">CATEGORIES</h2>
                    <ul>
                        <li>
                            <a href="#">学習記録</a>
                        </li>
                        <li>
                            <a href="#">作品集</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--▲ サイドバー : 終了-->
        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了-->

<!-- ▼ フッター : 開始-->
<footer class="l-footer">
    <div class="l-container">
        <p class="c-footer-description"><?php bloginfo('description'); ?></p>
        <a class="c-logo is-white" href="../">
            <div class="c-logo__image">
                <img src="../images/logo.png" alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="c-logo__text"><?php bloginfo('name'); ?></div>
        </a>
    </div>
</footer>
<div class="c-copyright">
    <p>Copyright © 2019 <?php bloginfo('name'); ?> All Rights Reserved.</p>
</div>
<!-- ▲ フッター : 終了-->
<?php wp_footer(); ?>
</body>
</html>
