<?php
/**
 * Add customize CSS from options customizer
 * Hook to wp_head() function to render style
 *
 * @package Wordpress
 * @since 1.0
 */
/* Customize CSS */
function tb_customizer_css() {
    ?>
    <style type="text/css">

		<?php if( get_theme_mod( 'jess_article_body_size' ) ) {
      $font_size = get_theme_mod( 'jess_article_body_size' ); ?>

      article.page p, article.post p {
        font-size: <?php echo (string)$font_size; ?>px !important;
      }

    <?php } ?>

    <?php if( get_theme_mod( 'jess_font_group_3' ) ) {
      $font_family = get_theme_mod( 'jess_font_group_3' ); ?>

      article.page h1, article.page h2, article.page h3, article.page h4, article.page h5, article.page h6,
      article.post h1, article.post h2, article.post h3, article.post h4, article.post h5, article.post h6,
      .post-title,
      .grid-title,
      .overlay-title,
      .feat-text h3,
      .side-title-post, .side-title-post a {
        font-family: <?php echo (string)$font_family; ?>px !important;
      }

    <?php } ?>

		</style>
    <?php
}
add_action( 'wp_head', 'tb_customizer_css', 100 );
?>
