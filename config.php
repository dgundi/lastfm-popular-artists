<?
/**
* API and Configuration settings
*
* @author Daniel Gundi
*/

 $site_path = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']));
 define ('__SITE_PATH', $site_path);

// Last.fm api settings
define(API_KEY, '94dd61ee65a919be490358652729ce3c');
define(API_URL, 'http://ws.audioscrobbler.com/2.0/?method=geo.gettopartists&format=json');

// Pagination settings
define(ARTISTS_PER_PAGE, 5);
?>