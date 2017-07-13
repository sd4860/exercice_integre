<?php get_header(); // voir le pourquoi du 'achive-animaux' dans CPT UI edit post-type animaux archive?>
<!-- ARCHIVE ANIMAUX -->
    <main>
        <section>
            <?php    
            $args = array(
                'post_type'      =>  'Animaux',
            );
            $requete = new WP_Query($args); ?>
            <?php if($requete->have_posts()):
            while($requete->have_posts()): $requete->the_post(); ?>
                <div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
                <div><?php the_excerpt(); // excerpt = extrait ?></div> 
            <?php endwhile; endif; wp_reset_query(); ?>
        </section>
    </main>
<?php get_footer(); ?>