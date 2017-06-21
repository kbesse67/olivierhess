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
  <div class="expanded row videoaccueil" id="accueil">
    	<video data-autoplay="" autoplay id="myVideo" loop="">
        <source src="wp-content/themes/foundationpress/assets/images/video.webm" type="video/webm">
      </video>
  </div>
  <section class="expanded row accueil">
    <h3 class="wow fadeInLeft" data-wow-delay="0.8s">“Structures intérieures”</h3>
    <h2 class="wow fadeInRight" data-wow-delay="1s">Envie d'un mobilier entièrement sur-mesure et qui correspond à votre Univers ?</h2>
    <a href="" class="button wow fadeInRight " data-wow-delay="1.2s">Voir les travaux</a>
    <a href="" class="hollow button secondary wow fadeInRight " data-wow-delay="1.4s">Contacter Olivier Hess</a>
  </section>

  <section class="travaux" id="travaux">

    <div class="expanded row">
      <div class="large-9 columns wow fadeInLeft" data-wow-delay="0.4s">
          <a href="#" class="">
            <img src="wp-content/themes/foundationpress/assets/images/travaux1.png" class="hvr-shrink" alt="">
          </a>
      </div>
      <div class="large-3 columns">
        <h4 class="wow fadeInLeft" data-wow-delay="0.6s">Bibliothèque</h4>
        <h5 class="wow fadeInLeft" data-wow-delay="0.8s">Chêne, 81x180cm</h5>
      </div>
    </div>

    <div class="expanded row">
      <div class="large-3 columns travauxright">
        <h4 class="wow fadeInRight" data-wow-delay="0.6s">Bibliothèque</h4>
        <h5 class="wow fadeInRight" data-wow-delay="0.8s">Chêne, 81x180cm</h5>
      </div>
      <div class="large-9 columns wow fadeInRight" data-wow-delay="0.4s">
        <a href="#" class="">
          <img src="wp-content/themes/foundationpress/assets/images/travaux1.png" class="hvr-shrink" alt="">
        </a>
      </div>
    </div>


    <div class="expanded row">
      <div class="large-9 columns wow fadeInLeft" data-wow-delay="0.4s">
          <a href="#" class="">
            <img src="wp-content/themes/foundationpress/assets/images/travaux1.png" class="hvr-shrink" alt="">
          </a>
      </div>
      <div class="large-3 columns">
        <h4 class="wow fadeInLeft" data-wow-delay="0.6s">Bibliothèque</h4>
        <h5 class="wow fadeInLeft" data-wow-delay="0.8s">Chêne, 81x180cm</h5>
      </div>
    </div>

    <div class="expanded row">
      <div class="large-3 columns travauxright">
        <h4 class="wow fadeInRight" data-wow-delay="0.6s">Bibliothèque</h4>
        <h5 class="wow fadeInRight" data-wow-delay="0.8s">Chêne, 81x180cm</h5>
      </div>
      <div class="large-9 columns wow fadeInRight" data-wow-delay="0.4s">
        <a href="#" class="">
          <img src="wp-content/themes/foundationpress/assets/images/travaux1.png" class="hvr-shrink" alt="">
        </a>
      </div>
    </div>

  </section>


<section class="olivierhass" id="olivierhass">
  <div class="expanded row">
    <div class="large-12 large-offset-1 columns ">
      <h2 class="wow fadeInLeft">10 ans de passion, <br> 10 ans d'expériences</h2>
        </div>
  </div>
  <div class="expanded row">
    <div class="large-4  medium-6 large-offset-1 columns wow fadeInLeft" data-wow-delay="0.6s">
        <p> Cela fait maintenant plus de 10 ans que Olivier Hess  créer des objets, des meubles qui correspondent à vos désirs, à vos envies, à votre univers. Prenant son rôle d'artisan à coeur, chaque réalisation est un projet à part entière, une nouvelle aventure.
    La question qu'on pose souvent à Olivier est :
    Comment réussir à capter l'objet de rêve construit dans la tête du client ?</p>
    </div>
    <div class="large-4 medium-6 columns end wow fadeInLeft" data-wow-delay="0.8s">
  <p> Tout d'abord, il faut le connaître, le rencontrer. Comprendre son univers et son désir. Olivier et le client échange sur les objectifs et les usages. M. Hess propose différentes simulations avant de livrer et d'installer les pièces définitives. Ce qui laisse le temps au meuble de se perfectionner dans les moindres détails.</p>
    </div>
  </div>
</section>




<form  class="contact" id="contact">
  <div class="expanded row">
    <div class="large-11 large-offset-1 columns">
          <h2 class="wow fadeInLeft">Contact</h2>
    </div>
  </div>

  <div class="expanded row">
    <div class="large-3 large-offset-1 columns">
      <p>Vous souhaitez faire un devis ? ou tout simplement prendre contact avec Olivier Hess ?
Lui poser des questions ? Remplissez le formulaire, il se chargera de vous répondre.</p>

    </div>
    <div class="large-4 columns">
      <label for="name" class="wow fadeInUp" data-wow-delay="0.4s">Nom & Prénom</label>
  		<input type="text" name="name" id="name" placeholder="Nom & Prénom" value="" class="wow fadeInUp" data-wow-delay="0.4s"/>
  		<label for="forname" class="wow fadeInUp" data-wow-delay="0.6s">Type de meuble</label>
  		<input type="text" class="wow fadeInUp" data-wow-delay="0.6s" name="meuble" id="meuble" placeholder="Bibliothèque par exemple" value="" />
    </div>
    <div class="large-4 columns">
      <label for="name" class="wow fadeInUp" data-wow-delay="0.4s">E-mail</label>
  		<input type="text" name="name" id="name" placeholder="E-mail*" value="" class="wow fadeInUp" data-wow-delay="0.4s"/>
  		<label for="forname" class="wow fadeInUp" data-wow-delay="0.6s">Téléphone*</label>
  		<input type="text" class="wow fadeInUp" data-wow-delay="0.6s" name="meuble" id="meuble" placeholder="Téléphone" value="" />
    </div>
  </div>

  <div class="expanded row">
    <div class="large-3 large-offset-1 columns">

        <p>
       <strong>
         Coordonnées :<br>
         5 Rue du César Julien - 67200 STRASBOURG <br>
         Tél.: 06 74 86 02 59 <br>
         structures.intérieures#gmail.com
       </strong>
       </p>
    </div>

    <div class="large-8 columns">
      <label for="message" class="wow fadeInUp" data-wow-delay="0.4s">Message</label>
      <textarea name="message" id="message" rows="8" cols="80" placeholder="Ecrivez votre message" class="wow fadeInUp" data-wow-delay="0.6s"></textarea>
      <input type="text" name="" class="button warning" value="Envoyer">
    </div>
  </div>

</form>

</div>


<?php get_footer();
