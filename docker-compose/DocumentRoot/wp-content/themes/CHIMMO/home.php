<?php
/*
Template Name: Home
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <title>CHIMMO</title>
</head>
<body>

<?php get_header(); ?>

<div id="bandeau">
<img class="bandeau_image" src="<?php echo get_field('bandeau_image'); ?>">
  <h1 class="title"><?php the_field('bandeau_titre') ?></h1>
  <p class="subtitle"><?php the_field('bandeau_soustitre') ?></p>
  <?php 
  $group = get_field('bouton');
  if($group['title']) :
    $url = $group['url'];
    $target = 'target="_blank" rel="noopener"';
    if( $group['choice'] == 'pagelink' ) {
      $url = $group['page_link'];
      $target = '';
      }
      ?>
      <a class="lien" href="<?php echo $url ?>" <?php echo $target; ?> >
      <div class="icon-container">
        <div class="icon"><img src="http://localhost:8080/wp-content/svg/arrow-right2.svg" alt=""></div>
      </div>
      <p><?php echo $group['title']; ?></p>
    </a>
    <?php endif; ?>
    <div class="titre1">
      <h3><?php the_field('bandeau_past_pastg') ?></h3>
    </div>
    <div class="titre2">
      <h3><?php the_field('bandeau_past_pastd') ?></h3>
    </div>
  </div>

  <div id="a-propos">
      <h6 class="a-propos-immo"><?php the_field('sur-titre') ?></h6>
      <h1 class="a-propos-titre"><?php the_field('a-propos-titre') ?></h1>
      <p class="a-propos-text"><?php the_field('texte') ?></p>
      <img class="a-propos-image" src="http://localhost:8080/wp-content/images/1200x800_01.jpg" alt="">
      <div id="ap-savoir-plus">
        <div class="ap-fleche"><img class="ap-savoir-plus-fleche" src="http://localhost:8080/wp-content/svg/arrow-right3.png" alt=""></div>
        <div class="ap-savoir-plus-content"><p>EN SAVOIR PLUS</p></div>
      </div>
  </div>

  <div id="image-centrale">
      <img src="http://localhost:8080/wp-content/images/1600x1000_01.jpg" alt="">
  </div>

  <div id="homepage-columns">
    <div class="homepage-column-left">
      <div class="homepage-icon"><img class="homepage-icon-left" src="http://localhost:8080/wp-content/svg/icon-plus.svg" alt=""></div>
      <div class="homepage-title-left"><?php the_field('spec-titre') ?></div>
      <div class="homepage-list-left">
        <ul class="blop">
          <li class="listEltsTxt">Une architecture contemporaine et intemporelle.</li>
          <li class="listEltsTxt2">Un emplacement d'exception.</li>
          <li class="listEltsTxt2">Un projet éco-conçus.</li>
          <li class="listEltsTxt2">Des finitions complètes et de standing.</li>
          <li class="listEltsTxt2">Des grandes terrasses et des parkings aisés.</li>
          <li class="listEltsTxt">Proches de toutes structures et commodités.</li>
          <li class="listEltsTxt">Une isolation thermique et acoustique sans faille.</li>
          <li class="listEltsTxt">Un chauffage individuel et une ventilation hyper économe.</li>
        </ul>
      </div>
    </div>
    <div class="homepage-column-right">
      <div class="homepage-icon2"><img class="homepage-icon-right" src="http://localhost:8080/wp-content/svg/icon-list.svg" alt=""></div>
      <div class="homepage-title-right"><?php the_field('spec-titre2') ?></div>
      <div class="homepage-list-right">
        <ul class="blop">
          <li class="listEltsTxt">Matériaux à hautes performances énergétiques.</li>
          <li class="listEltsTxt2">Modules sanitaires complet.</li>
          <li class="listEltsTxt2">Revêtement de sols dans tous les locaux.</li>
          <li class="listEltsTxt2">Parlophone, vidéophone.</li>
          <li class="listEltsTxt2">Éclairage sur les communs sur minuterie.</li>
          <li class="listEltsTxt2">Sérieux, et professionnalisme.</li>
          <li class="listEltsTxt">Accès sécurisé et aisé pour les personnes à mobilité réduite.</li>
          <li class="listEltsTxt">Châssis extérieur en aluminium avec vitrage haute perfomance.</li>
        </ul>
      </div>
    </div>
  </div>
  
  <?php get_footer(); ?>

</body>
</html>