<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'Examenarbete' );

/** Databasens användarnamn */
define( 'DB_USER', 'root' );

/** Databasens lösenord */
define( 'DB_PASSWORD', '' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r87eYhmk`D14IuMfI9H&5#s%0Fy|kn:^viuPf#^h}!Vj<p,3a#-,5_1c>MRc@wxu' );
define( 'SECURE_AUTH_KEY',  'S7S$enC6pc}*L.W$E,3ioY!tG#P1,zw`-Er~fi1^;Q[$s:t.o/5e3U)LFRa=VdUK' );
define( 'LOGGED_IN_KEY',    '(TW=#>+3r9;Z/YV9]/uJKzz@gePt@~u7oU-w~cKk<OC{M:.a803F%:pD)`2z4^}f' );
define( 'NONCE_KEY',        'f]UhPQJX!kO+Bq4_a@wNkXzei`A^Vd&U`>&Z gAOYyP_rU3W]4lc2-#6Ym#k!VM,' );
define( 'AUTH_SALT',        '|i8|Vi:bqede@P=-bY51!/$NRy:@c^@ ?H`JNa{CDDRPF((!<`_gWJ*<$rQX7UGo' );
define( 'SECURE_AUTH_SALT', 'z^E8CG_Zf=(s1Ck_yC:egI@[vqGfmIZo_1O1YGgHn9/@QtcoB:qN(``WP_A~>r.q' );
define( 'LOGGED_IN_SALT',   'IoDG&k#tiA( 5}n(4^AF8cJZ -=h=;YxM6-wD]&GI]$3zZ&FMO{@@i94~^yhtm)2' );
define( 'NONCE_SALT',       '^Mv/5D@.e.V&}(JB2g6{p!k&;ztb&W9gJ*l%&5iPaFpd7_NGN+.:M~Ow84-.PV`7' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');