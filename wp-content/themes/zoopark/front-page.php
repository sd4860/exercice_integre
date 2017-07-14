<?php get_header(); ?>
<!-- FRONT PAGE -->

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="slogan container">
                <div class="row center">
                    <h2 class="header col s12 light"><?php the_field('parallax1-text_fld'); ?></h2></div>
                <div class="row center"><a href="#" id="download-button" class="btn-large waves-effect waves-light brown lighten-1"><?php the_field('lien1_fld'); ?></a></div>
            </div>
        </div>
       <div class="parallax"> <?php if($image = get_field("parallax1_fld")):?><img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/><?php endif;?></div>
    </div>
    <div class="container">
        <div href="#horaires" class="section">
            <div class="row">
                <?php 
                  $args = array(
                    'post_type'      =>  'animaux',
                    'posts_per_page' =>  4
                  );
                  $requete = new WP_Query($args); ?>
                  <?php if($requete->have_posts()):
                  while($requete->have_posts()): $requete->the_post(); // requete si on va chercher un element complementaire à mon permalink ?> 
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="center brown-text"><i class="fi flaticon-animal-<?php the_field('icon-page-animal_fld');?>"></i></h2>
                                <h3 class="center"><?php the_title(); ?><em>- <?php the_field('region_de_lanimal_fld'); ?></em></h3>
                                <p class="light"><?php the_field('text_introductif_fld'); ?></p>
                            </a>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="call orange lighten-1">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 center">
                    <?php    
                        $args = array(
                            'post_type'      =>  'billeterie',
                            'posts_per_page' =>  4
                        );
                    $requete = new WP_Query($args); ?>
                    <?php if($requete->have_posts()):
                    while($requete->have_posts()): $requete->the_post(); ?>
                        <p><?php the_field('titre-billeterie_fld'); ?></p><a href="#" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">ZooPass<strong><?php the_field('duree1_fld'); ?></strong><span><?php the_field('prix1_fld'); ?>€*</span></a><a href="#" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">ZooPass<strong><?php the_field('duree2_fld'); ?></strong> <span><?php the_field('prix2_fld'); ?>€*</span></a>
                        <p>*<small><?php the_field('condition_fld'); ?></small></p>

                        <?php endwhile; endif;wp_reset_query(); ?>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h3 class="header col s12 light"><?php the_field('parallax2-text_fld'); ?></h3></div>
            </div>
        </div>
       <div class="parallax"><?php if($image = get_field("parallax2_fld")):?><img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/><?php endif;?></div>
    </div>
    <div class="opening container">
        <div id="horaires" class="section">
           <?php 
                $args = array(
                'post_type'      =>  'horaire',
                'posts_per_page' =>  4,
            );
            $requete = new WP_Query($args); ?>
            <div class="row">
                <div class="col s12 center">
                    <h3 class="orange-text">Horaires</h3>
                    <h4>Jours d'ouverture et heures d'ouverture</h4>
                    <ul class="tabs">
                        <?php if($requete->have_posts()):
                        while($requete->have_posts()): $requete->the_post(); ?>
                            <li class="tab col s3"><a href="#onglet_<?php the_ID(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
                
                <?php if($requete->have_posts()):
                while($requete->have_posts()): $requete->the_post(); ?>
                    <div id="onglet_<?php the_ID(); // the_ID = un chiffre et un id ne peut pas commencer par un chiffre donc je met devant "onglet_"?>" class="col s12"> 
                        <?php the_content();// the_content(); insère lui m^me les balises <p> donc je les enlèves ?>
                    </div>
                <?php endwhile; endif;  wp_reset_query(); // sors de cette requete pour que ce qu'il y a en dessous puisse se basé sur la requete principal ?>
            </div>
        </div>
    </div>
    
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h3 class="header col s12 light"><?php the_field('parallax3-text_fld');?></h3>
                </div>
            </div>
        </div>
       <div class="parallax">
           <?php if($image = get_field("parallax3_fld")):?><img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/><?php endif;?>
       </div>
    </div>
<?php get_footer(); ?>