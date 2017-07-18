    <footer class="page-footer brown lighten-1">
        <div class="container">
            <div class="row">
                <div class="col l3 m6 s12">
                    <h3 class="white-text">Spectacles</h3>
                    <ul class="footer-links">
                            <?php 
                                $args = array(
                                'post_type'      =>  'animations',
                                "tax_query"  => array(
                                    array(
                                        "taxonomy" => "type_animations",
                                        "terms" => "spectacles",
                                        "field" => "slug"
                                    )),
                                'posts_per_page' =>  9
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
                                'post_type'      =>  'animations',
                                "tax_query"  => array( // array pour ma taxonomie et mes types car -> plusieurs types
                                    array(
                                        "taxonomy" => "type_animations",
                                        "terms" => "activites",
                                        "field" => "slug"
                                    )),
                                'posts_per_page' =>  9
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
                <div class="gmap col l6 m12 s12"><?php echo do_shortcode('[google_maps id="317"]'); ?></div>
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

    <!--  Scripts contact -->
    <script>
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    </script>
    <script>
        $(document).ready(function() {
        $('select').material_select();
        });
    </script>
    <Script>  
    // checkbox tel formulaire
        $('#test5').click(function() {
            if($(this).is(":checked")) {
                $('#icon_telephone').removeAttr('disabled value');
                $('#icon_telephone').attr('required','required');
            }
            else {
                $('#icon_telephone').attr('disabled','disabled');
                $('#icon_telephone').attr('value','Not editable');
                $('#icon_telephone').removeAttr('required');
            }
        });
    </Script>
    <Script>
        $("document").ready(function($){
        var nav = $('.nav-princip');

        $(window).scroll(function () {
            if ($(this).scrollTop() > 125) {
                nav.addClass("f-nav");
            } else {
                nav.removeClass("f-nav");
            }
        });
    });
    </Script>

    <!-- Geolocalisation -->
    <script src="jmobile.js"></script>
    <script src="geolocalisation.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwvT-r8421Vi4TL5epbwUfmfOAE1uig2k&callback=Main">
    </script>
        <script>
        function Main() {
            var gosselies = {lat: 50.4709058, lng: 4.4687986}; // il faut autorisé sur le navigateur
            var map = new google.maps.Map(document.querySelector('#map'),{ //affiche la carte
                zoom: 15,
                center: gosselies
            });
            var marker = new google.maps.Marker({ // "marker" = le cigle sur la carte
                position: gosselies,
                map: map,
                label: "Cepegra - Forem",
                title: "C'est ouvert !"
            });
        }
    </script>
</body>
</html>