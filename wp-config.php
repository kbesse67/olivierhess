<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'besse');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`O(!H&afzpYl94z]Q!+;$7Vq`7(:+5,~HAP&r$ Z+8$}KrR_8q-Q@pd zPWU`J`{');
define('SECURE_AUTH_KEY',  'JXn8/n<4ZZ+X]w<`}>-SP!R8;2kC|cl[a@<|360^F2uje-XtINTK6[PAQr1/Ld8~');
define('LOGGED_IN_KEY',    ',$@S>uOne_+ (!&uF{)~(x*H-_&>7i%qg^QI4`zsr0:J/N4z1`+F9$dA:4}_QfdO');
define('NONCE_KEY',        'n.#KO(Wdl^C N4!VI,<SA{p@)JwDDq{n*~2B$_D|08wT?X,pnz[Eu/4CQ Mcy2QL');
define('AUTH_SALT',        'OqU)VoyaUsZH_s@2pbh_u :H3-db,3cUF5NL`+D4NZS8z@VIIhW4ud/iG>GZTY:b');
define('SECURE_AUTH_SALT', 'I62*0w;)7*`e]$[7HK:.En.6F8Op6[lobQ$%`7A0v{)~@r<NEfsZJvX}+/rLiKDp');
define('LOGGED_IN_SALT',   'dh1`RKRTqq!~<+OLMzY(%l<xP=wID-k#0*&cE?i T!xR@e^WN)c?%%<?NqRevAV|');
define('NONCE_SALT',       'nM+[bu}x]|fq*d~-T?CId/1HeE!VtGysDu[{#sH/7}`83.r@#7%UU%zuOKHmb&:#');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');