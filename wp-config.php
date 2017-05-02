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
define('DB_NAME', 'ekimana');

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
define('AUTH_KEY',         '/}tvrNl>w{k4K@~sGPG6X5&7(cnlcyvoo8R176XA:Qf+Cx$diiuJdaA MvA)*5ft');
define('SECURE_AUTH_KEY',  '4L&~#Q*WR.q0SLHX}_<R@Qd~{l{s0;ryO#JF>~!{YD$IdcY,E0&$y-Gzt|*31<7:');
define('LOGGED_IN_KEY',    ']vDi[[ NQNN~{^IH1zzIf`^kMu;#jg5i={9O;cw@#!E5#;xDtw&xa]8:)Y8M9wkG');
define('NONCE_KEY',        'nD?(=:THx5Eas$1 ~_=vY]:JHXe[U@[uq>}{WT~6d&%9)ggxH*k3zQ?~7PXD-nN4');
define('AUTH_SALT',        '}#l(S#}U/2yK rs>NVO5B x,qiDdnP_Q%oqNP{%`]6_SMh2DAG$bgoRHXt&.q736');
define('SECURE_AUTH_SALT', '.t&,i`g;BnDD,~=VPtxC-JZ7:0FNn$Tx)PcP-N$_|(}n+fQbqS_OOPW*?HZ/BlI:');
define('LOGGED_IN_SALT',   'R!Sf!yqjulH+@MXw:j+.ikVONlvlm$7lUj,{+ZACEL!MRwNu1$S>RN_e>sKN:zM-');
define('NONCE_SALT',       'b:uSW= mp[@RLR`:b8MX[NE:_)A_<]gYh3?7bS+|#`f,ccC0YFeM~wPg/{)l7xDm');
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
