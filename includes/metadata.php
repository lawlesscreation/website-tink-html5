<?php
/**
 * The template for displaying a posts metadata.
 *
 * Contains the category and posted date of the article.
 *
 * @package tink-tank
 */
?>

<p class="metadata">
    <span class="hide">Posted in </span>
    <?php the_category(' '); ?>
    <span class="hide"> on </span>
    <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('F jS Y') ?></time>
</p><!-- .metadata -->