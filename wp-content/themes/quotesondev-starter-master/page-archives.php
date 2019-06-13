<?php
get_header(); ?>

<div class="page-archives-class">
<ul>
    <?php
    global $post;
 
    $myposts = get_posts( array(
        'posts_per_page' => 25,
        'offset'         => 3,
        'quote'       => 3
    ) );
 
    if ( $myposts ) {
        foreach ( $myposts as $post ) : 
            setup_postdata( $post ); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <li><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></li>
        <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
</ul>
</div>





<br> <br> <br> <br> <br>
<?php get_footer(); ?>