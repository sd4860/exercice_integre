    <footer class="page-footer brown lighten-1">
        <div class="container">
            <div class="row">
                <div class="col l3 m6 s12">
                    <h3 class="white-text">Spectacles</h3>
                    <ul class="footer-links">
                            <?php 
                                $args = array(
                                'post_type'      =>  'post',
                                "category_name" => "spectacles",
                                'posts_per_page' =>  9,
                            );
                            $requete = new WP_Query($args);
                            if($requete->have_posts()):
                                while($requete->have_posts()): $requete->the_post(); ?>
                                    <li><a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; endif; 
                            wp_reset_postdata();?>
                        </li>
                    </ul>
                </div>
                <div class="col l3 m6 s12">
                    <h3 class="white-text">Activités</h3>
                    <ul class="footer-links">             
                            <?php 
                                $args = array(
                                'post_type'      =>  'post',
                                "category_name" => "activites",
                                'posts_per_page' =>  9, // "order" => "DESC" = x premiers | ASC = x derniers
                            );
                            $requete = new WP_Query($args);
                            if($requete->have_posts()):
                                while($requete->have_posts()): $requete->the_post(); ?>
                                    <li><a href="<?php  the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php endwhile; endif; 
                            wp_reset_postdata();?>
                        </li>
                    </ul>
                </div>
                <div class="gmap col l6 m12 s12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.3975145563036!2d4.466528315960438!3d50.4709429794782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c22920c155cb77%3A0x122916fe7183d084!2sCentre+de+comp%C3%A9tence+Forem+Cepegra!5e0!3m2!1sfr!2sbe!4v1499776981097" width="442" height="222" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            </div>
        </div>
        <div class="section white">
            <div class="access-map container">
                <div class="row">
                    <div class="col s12 center">
                        <h3 class="brown-text">Adresse</h3>
                        <p>
                            <h4><em>Gosselies</em> <img src="<?php bloginfo("template_url");?>/img/ZOOPARK-03.svg" alt="logo"></h4><span itemprop="streetAddress">Rue Stranard -</span> <span itemprop="addressLocality">6041 Gosselies -</span> (<span itemprop="addressRegion">Belgique</span>- BE)</p>
                        <p>E411, sortie 25 direction Bouillon sur N89, sortie km 4,7</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section version grey darken-3">
            <div class="row">
                <div class="col s6 center"><a class="waves-effect text waves-orange btn-flat">Français</a></div>
                <div class="col s6 center"><a class="waves-effect waves-orange btn-flat">English</a></div>
            </div>
        </div>
        <div class="footer-copyright center grey darken-4">
            <div class="container">ZooPark <a class="brown-text text-lighten-3" href="#">2016</a></div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo("template_url");?>/js/materialize.js"></script>
    <script src="<?php bloginfo("template_url");?>/js/init.js"></script>
    <?php wp_footer(); ?>
</body>

</html>