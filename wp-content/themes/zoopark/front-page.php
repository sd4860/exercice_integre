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
        <div class="section">
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="fi flaticon-animals">Ours</i></h2>
                        <h3 class="center">L'Ours noir<em>- Amérique du Nord</em></h3>
                        <p class="light">Le continent nord-américain abrite une faune et une zone boisée incroyable</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="fi flaticon-animal-1">Quetzal</i></h2>
                        <h3 class="center">Splendides Quetzals <em>-Amérique du Sud</em></h3>
                        <p class="light">Visitez notre immense volière exotique d'oiseaux et de plantes d'Amérique du sud</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="fi flaticon-animal-3">Girafons</i></h2>
                        <h3 class="center">Jeunes Girafons <em>- Savane africaine</em></h3>
                        <p class="light">Découvrez la richesse de la plaine Africaine et la beauté de ses habitants</p>
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
                        <p>Achetez votre ZOOPASS et accéder à notre Parc toute l'année !</p><a href="#" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">ZooPass<strong>1 jour</strong><span>28€*</span></a> <a href="#" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">ZooPass<strong>1 an</strong> <span>45€*</span></a>
                        <p>*<small>Pass individuel</small></p>
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
        <div class="section">
            <div class="row">
                <div class="col s12 center">
                    <h3 class="orange-text">Horaires</h3>
                    <h4>Jours d'ouverture et heures d'ouverture</h4>
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#spring">Printemps</a> 3 mars au 20 juin</li>
                        <li class="tab col s3"><a class="active" href="#summer">Été</a> 21 juin au 15 septembre</li>
                        <li class="tab col s3"><a href="#winter">Hiver</a> 16 septembre au 4 janvier</li>
                    </ul>
                </div>
                <div id="spring" class="col s12">
                    <?php ?>
                </div>
                <div id="summer" class="col s12">
                    <?php ?>
                </div>
                <div id="winter" class="col s12">
                    <?php ?>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h3 class="header col s12 light"><?php the_field('parallax3-text_fld');?></h3></div>
            </div>
        </div>
       <div class="parallax"><?php if($image = get_field("parallax3_fld")):?><img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"/><?php endif;?></div>
    </div>
<?php get_footer(); ?>