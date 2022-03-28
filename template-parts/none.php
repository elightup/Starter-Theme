<section class="no-results not-found">
    <h1 class="page-title"><?php esc_html_e('Nothing Found', 'independentlink'); ?></h1>

    <div class="page-content">
        <?php if (is_search() ) : ?>
            <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'independentlink'); ?></p>
            <?php get_search_form(); ?>
        <?php else : ?>
            <p><?php esc_html_e("It seems we can't find what you're looking for. Perhaps searching can help.", 'independentlink'); ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</section>