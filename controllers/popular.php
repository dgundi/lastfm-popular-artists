<?
/**
 * Controller responsible to return popular songs based on users country input
 *
 *
 * @author Daniel Gundi
 */

require_once('models/lastfm.php');

$popularArtist = new LastfmApi(API_URL,API_KEY,'geo.gettopartists',ARTISTS_PER_PAGE);

$popularArtistArray = $popularArtist->getArtistbyCountry($country,$page);

require_once('views/results.php');

?>