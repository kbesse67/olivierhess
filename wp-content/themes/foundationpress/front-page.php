<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="thezero">

</div><!--

--><div class="themain">
  <div class="expanded row videoaccueil">
    	<video data-autoplay="" autoplay id="myVideo" loop="">
        <source src="wp-content/themes/foundationpress/assets/images/video.webm" type="video/webm">
      </video>
  </div>
  <section class="expanded row accueil">
    <h3>“Structures intérieures”</h3>
    <h2>Envie d'un mobilier entièrement sur-mesure et qui correspond à votre Univers ?</h2>
    <a href="" class="button">Voir les travaux</a>
    <a href="" class="hollow button secondary">Contacter Olivier Hess</a>
  </section>
</div>


<?php get_footer();
